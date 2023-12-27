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

// Check if the 'i' parameter is present and valid
if (!isset($_GET['r']) || !is_numeric($_GET['r'])) {
    die('Invalid or missing RIS ID.');
}

$risID = intval($_GET['r']);

// Assuming you have already established a database connection
$stmt = $conn->prepare("SELECT * FROM ris_entry WHERE id = :id");
$stmt->bindParam(':id', $risID);
$stmt->execute();

// Fetch the first row as an object
$obj = $stmt->fetch(PDO::FETCH_OBJ);

if (!$obj) {
    die('Invalid IAR ID or no records found.');
}

// Access the values from the fetched object
$ris_no = $obj->ris_no;
$fund = $obj->fund;
$dept = $obj->dept;
$rcc = $obj->rcc;
$stock_no = $obj->stock_no;
$qty = $obj->qty;
$remarks = $obj->remarks;
$purpose = $obj->purpose;
$req_by = $obj->req_by;
$app_by = $obj->app_by;
$iss_by = $obj->iss_by;
$req_desig = $obj->req_desig;
$app_desig = $obj->app_desig;
$iss_desig = $obj->iss_desig;

$file_name = 'RIS_' . $ris_no . ".xls";

$sql2 = "SELECT DISTINCT r.id, r.ris_no, r.fund, r.dept, r.rcc, r.stock_no, r.qty, r.remarks, r.purpose, r.req_by, r.app_by, r.iss_by, r.req_desig, r.app_desig, r.iss_desig, st.item, st.stock_desc, st.unit
         FROM ris_entry r
         JOIN stock_tbl st ON r.stock_no = st.stock_no
         WHERE r.ris_no = :ris_no
         ORDER BY r.ris_no";
$stmt2 = $conn->prepare($sql2);
$stmt2->bindParam(':ris_no', $ris_no);
$stmt2->execute();

$rcount=$stmt2->rowCount();
$result = $stmt2->fetch(PDO::FETCH_ASSOC);

if (!$result) {
    die('No records found for the specified RIS ID.');
}

$spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load('FIASys/RIS1.xls');
$active_sheet = $spreadsheet->getActiveSheet();

$active_sheet->setCellValue('B6', 'Civil Service Commission Regional Office V');
$active_sheet->setCellValue('M6', $result['fund']);
$active_sheet->setCellValue('B8', $result['dept']);
// $active_sheet->setCellValue('B9', $result['dept']);
$active_sheet->setCellValue('B13', $result['purpose']);
$active_sheet->getStyle('B13')->getAlignment()->setWrapText(true);
$active_sheet->setCellValue('L8', $result['rcc']);
$active_sheet->setCellValue('L9', $result['ris_no']);
$active_sheet->setCellValue('C16', $result['req_by']);
$active_sheet->setCellValue('D16', $result['app_by']);
$active_sheet->setCellValue('F16', $result['iss_by']);
$active_sheet->setCellValue('C17', $result['req_desig']);
$active_sheet->setCellValue('D17', $result['app_desig']);
$active_sheet->setCellValue('F17', $result['iss_desig']);
$i =1;
// set beginning row
$row = 12;

do {
    $stock_no = $result['stock_no'];
    $item = $result['item'];
    $stock_desc = $result['stock_desc'];
    $unit = $result['unit'];
    $qty = $result['qty'];
    $remarks = $result['remarks'];

    $active_sheet->setCellValue('A' . $row, $stock_no);
    $active_sheet->setCellValue('B' . $row, $unit);
    $active_sheet->setCellValue('C' . $row, $item . ' - ' . $stock_desc);
    // $active_sheet->getColumnDimension('C')->setAutoSize(true);
    $active_sheet->getStyle('C')->getAlignment()->setWrapText(true);
    $active_sheet->setCellValue('F' . $row, $qty);
    $active_sheet->setCellValue('H' . $row, '√');
    $active_sheet->setCellValue('L' . $row, $qty);
    $active_sheet->setCellValue('N' . $row, $remarks);

    $ins = $row + 1;
    if ($i < $rcount) {

    $range1 = 'C' . $ins . ':E' . $ins;
    $range2 = 'F' . $ins . ':G' . $ins;
    $range3 = 'L' . $ins . ':M' . $ins;
    $active_sheet->insertNewRowBefore($ins, 1);
    $active_sheet->mergeCells($range1);
    $active_sheet->mergeCells($range2);
    $active_sheet->mergeCells($range3);
    // $active_sheet-> setCellValue('A12', $result['stock_no']);
    }
    $i++;
    $row++;
    
} while ($result = $stmt2->fetch(PDO::FETCH_ASSOC));

// Adjust the page margins
$active_sheet->getPageMargins()->setTop(0.5);
$active_sheet->getPageMargins()->setBottom(0.5);
$active_sheet->getPageMargins()->setLeft(0.5);
$active_sheet->getPageMargins()->setRight(0.5);


$writer = \PhpOffice\PhpSpreadsheet\IOFactory::createWriter($spreadsheet, 'Xls');
$writer->save($file_name);
// Save a copy of the report for each report downloaded by processors
$writer->save("./reports/RIS/" . $file_name);

header('Content-Type: application/x-www-form-urlencoded');
header('Content-Transfer-Encoding: Binary');
header("Content-disposition: attachment; filename=\"" . $file_name . "\"");
readfile($file_name);
unlink($file_name);

$conn = null;

echo "<script>window.location='risPage.php?r=$risID'</script>";
echo "<script>
    function printExcelFile() {
        var iframe = document.createElement('iframe');
        iframe.style.visibility = 'hidden';
        iframe.src = '$file_name';
        document.body.appendChild(iframe);
        iframe.contentWindow.print();
    }
    window.onload = function() {
        printExcelFile();
    };
</script>";
exit;
?>