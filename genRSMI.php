<?php
// Enable error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

include 'server/server.php';
require 'vendor/autoload.php';
require 'dompdf/vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Style\Font;
use PhpOffice\PhpSpreadsheet\Style\Border;
use PhpOffice\PhpSpreadsheet\Style\Color;
use PhpOffice\PhpSpreadsheet\Spreadsheet;

// $fund=$_POST['fund'];
if (isset($_POST['generateRSMIButton'])) {
    // Assuming you have already established a database connection
    $selectedDate = isset($_POST['selectedDate']) ? $_POST['selectedDate'] : null;
    if (!$selectedDate) {
        die('Invalid or missing selected date.');
    }

    list($startDate, $endDate) = explode(' - ', $selectedDate);

    $sd = date("Y-m-d", strtotime($startDate));
    $ed = date("Y-m-d", strtotime($endDate));

    $sf = isset($_POST['fund']) ? $_POST['fund'] : null;

    $cq = $conn->query("SELECT COUNT(*) AS count FROM rsmi WHERE date >= '$sd' AND date <= '$ed'");
    $cr = $cq->fetch(PDO::FETCH_ASSOC);
    $count = $cr['count'] + 1;
    $ym = date("Y-m");
    $rsmi_no = $ym . '-' . sprintf('%04d', $count);

    $sql = "INSERT INTO rsmi (rsmi_no, date) VALUES (:rsmi_no, CURRENT_TIMESTAMP)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':rsmi_no', $rsmi_no);
    $stmt->execute();

    $sql = "SELECT DISTINCT 
                ris_entry.ris_no, 
                ris_entry.fund, 
                ris_entry.dept, 
                ris_entry.stock_no, 
                ris_entry.qty, 
                ris_entry.rcc, 
                stock_tbl.item, 
                stock_tbl.stock_desc, 
                stock_tbl.unit,
                ris_entry.unit_cost
            FROM ris_entry
            JOIN stock_tbl 
            ON ris_entry.stock_no = stock_tbl.stock_no
            LEFT JOIN (
                SELECT stock_no, MIN(unit_cost) AS unit_cost
                FROM delivery_entry 
                GROUP BY stock_no
            ) AS delivery_entry 
            ON ris_entry.stock_no = delivery_entry.stock_no
            WHERE DATE(ris_entry.date) 
            BETWEEN :start_date 
            AND :end_date 
            AND ris_entry.fund = :selected_fund
            ORDER BY ris_entry.ris_no";

    
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':start_date', $sd);
    $stmt->bindParam(':end_date', $ed);
    $stmt->bindParam(':selected_fund', $sf);
    $stmt->execute();
    $rcount = $stmt->rowCount();
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    // echo $rcount;
    // exit;
    
    if (!empty($results)) {
        // Load Excel template
        $spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load('FIASys/RSMI.xls');
        $active_sheet = $spreadsheet->getActiveSheet();
        $firstRow = reset($results);
        $fund = $firstRow['fund'];

        $active_sheet->setCellValue('B6', 'Civil Service Commission Regional Office V');
        $active_sheet->setCellValue('B7', $fund);
        $active_sheet->setCellValue('J7', date('F j, Y'));
        
        // Generate and set the serial number in H6
        $active_sheet->setCellValue('J6', $rsmi_no);

        $stmt->execute();

$row = 12;

// Array to store total cost and quantity for each stock_no
$stockTotals = array();

foreach ($results as $currentRow) {
    $ris_no = $currentRow['ris_no'];
    $dept = $currentRow['dept'];
    $rcc = $currentRow['rcc'];
    $stock_no = $currentRow['stock_no'];
    $item = $currentRow['item'];
    $stock_desc = $currentRow['stock_desc'];
    $unit = $currentRow['unit'];
    $qty = $currentRow['qty'];
    $unit_cost = $currentRow['unit_cost'];

    $active_sheet->setCellValue('A' . $row, $ris_no);
    $active_sheet->setCellValue('B' . $row, $rcc . '-' . $dept);
    $active_sheet->setCellValue('D' . $row, $stock_no);
    $active_sheet->setCellValue('E' . $row, $item . ' - ' . $stock_desc);
    $active_sheet->getStyle('E' . $row)->getAlignment()->setWrapText(true);
    $active_sheet->setCellValue('G' . $row, $unit);
    $active_sheet->setCellValue('H' . $row, $qty);
    $active_sheet->setCellValue('I' . $row, $unit_cost);

    $total_amt = $qty * $unit_cost;
    $active_sheet->setCellValue('J' . $row, $total_amt);

    if (isset($stockTotals[$stock_no])) {
        $stockTotals[$stock_no]['total_cost'] += $total_amt;
        $stockTotals[$stock_no]['qty'] += $qty;
    } else {
        $stockTotals[$stock_no] = array('total_cost' => $total_amt, 'qty' => $qty);
    }

    $ins = $row + 1;

    if ($currentRow !== end($results)) {
        $range1 = 'B' . $ins . ':C' . $ins;
        $range2 = 'E' . $ins . ':F' . $ins;
        $active_sheet->insertNewRowBefore($ins, 1);
        $active_sheet->mergeCells($range1);
        $active_sheet->mergeCells($range2);
    }

    $row++;
}

$q = 1;
$row1 = $row + 3;

foreach ($stockTotals as $stock_no => $totals) {
    $total_cost = $totals['total_cost'];
    $qty = $totals['qty'];

    $active_sheet->setCellValue('B' . $row1, $stock_no);
    $active_sheet->setCellValue('D' . $row1, $qty);

    $unit_cost = $total_cost / $qty;
    $unit_cost1 = number_format($unit_cost, 2);
    $active_sheet->setCellValue('H' . $row1, $unit_cost1);
    $active_sheet->setCellValue('I' . $row1, $total_cost);

    $ins = $row1 + 1;
    if ($q < $rcount) {
        $range1 = 'B' . $ins . ':C' . $ins;
        $active_sheet->insertNewRowBefore($ins, 1);
        $active_sheet->mergeCells($range1);
    }
    $q++;
    $row1++;
}

        $file_name = 'RIS_' . $rsmi_no . ".xls";

        $writer = \PhpOffice\PhpSpreadsheet\IOFactory::createWriter($spreadsheet, 'Xls');
        $writer->save($file_name);
        // Save a copy of the report for each report downloaded by processors
        $writer->save("./reports/RSMI/" . $file_name);

        header('Content-Type: application/x-www-form-urlencoded');
        header('Content-Transfer-Encoding: Binary');
        header("Content-disposition: attachment; filename=\"" . $file_name . "\"");
        readfile($file_name);
        unlink($file_name);

        exit;
    } else {
        echo 'Selected Fund: ' . $sf . "<br>";
        echo 'Start Date: ' . $sd . "<br>";
        echo 'End Date: ' . $ed . "<br>";
        echo 'SQL Query: ' . $sql . "<br>";
    
        // Handle case where data is empty
        die('No data found for the selected date and fund.');
    }
}


// Redirect back to the original page if the form was not submitted
header('Location: rsmi.php');
exit;
?>