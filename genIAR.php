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
if (!isset($_GET['i']) || !is_numeric($_GET['i'])) {
    die('Invalid or missing IAR ID.');
}

$iarID = intval($_GET['i']);

// Assuming you have already established a database connection
$stmt = $conn->prepare("SELECT * FROM delivery_entry WHERE id = :id");
$stmt->bindParam(':id', $iarID);
$stmt->execute();

// Fetch the first row as an object
$obj = $stmt->fetch(PDO::FETCH_OBJ);

if (!$obj) {
    die('Invalid IAR ID or no records found.');
}

// Access the values from the fetched object
$iar_no = $obj->iar_no;
$fund = $obj->fund;
$req_dept = $obj->req_dept;
$del_no = $obj->del_no;
$del_date = $obj->del_date;
$supplier = $obj->supplier;
$po_no = $obj->po_no;
$po_date = $obj->po_date;
$stock_no = $obj->stock_no;
$qty1 = $obj->qty1;

$file_name = 'IAR_' . $iar_no . ".xls";

$sql2 = "SELECT DISTINCT d.id, d.iar_no, d.fund, d.req_dept, d.del_no, d.del_date, d.supplier, d.po_no, d.po_date, d.stock_no, d.qty1, st.item, st.stock_desc, st.unit, dept.rcc
         FROM delivery_entry d
         JOIN stock_tbl st ON d.stock_no = st.stock_no
         JOIN dept ON d.req_dept = dept.acname
         WHERE d.iar_no = :iar_no";
$stmt2 = $conn->prepare($sql2);
$stmt2->bindParam(':iar_no', $iar_no);
$stmt2->execute();

$action = "Generate Excel file";
$details = "Generate Inspection & Acceptance Report ( $iar_no )";
logActivity($action, $details);

$rcount=$stmt2->rowCount();
$result = $stmt2->fetch(PDO::FETCH_ASSOC);

if (!$result) {
    die('No records found for the specified IAR ID.');
}

$spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load('FIASys/IAR.xls');
$active_sheet = $spreadsheet->getActiveSheet();

$active_sheet->setCellValue('D6', 'Civil Service Commission Regional Office V');
$active_sheet->setCellValue('D8', $result['supplier']);
$active_sheet->setCellValue('D9', $result['po_no'] . ' / ' . $result['po_date']);
$active_sheet->setCellValue('E10', $result['req_dept']);
$active_sheet->setCellValue('E11', $result['rcc']);
$active_sheet->setCellValue('I6', $result['fund']);
$active_sheet->setCellValue('I8', $result['iar_no']);
$active_sheet->setCellValue('I9', $result['del_date']);
$active_sheet->setCellValue('I10', $result['del_no']);
$active_sheet->setCellValue('I11', $result['del_date']);

$i =1;
// set beginning row
$row = 13;

do {
    $iar_no = $result['iar_no'];
    $stock_no = $result['stock_no'];
    $item = $result['item'];
    $stock_desc = $result['stock_desc'];
    $unit = $result['unit'];
    $qty1 = $result['qty1'];

    $active_sheet->setCellValue('A' . $row, $stock_no);
    $active_sheet->setCellValue('D' . $row, $item . ' - ' . $stock_desc);
    $active_sheet->getStyle('D'. $row)->getAlignment()->setWrapText(true);
    $active_sheet->setCellValue('H' . $row, $unit);
    $active_sheet->setCellValue('I' . $row, $qty1);

    $ins = $row + 1;
    if ($i < $rcount) {
    $range1 = 'A' . $ins . ':C' . $ins;
    $range2 = 'D' . $ins . ':G' . $ins;
    $range3 = 'I' . $ins . ':J' . $ins;
    $active_sheet->insertNewRowBefore($ins, 1);
    $active_sheet->mergeCells($range1);
    $active_sheet->mergeCells($range2);
    $active_sheet->mergeCells($range3);

}
    $i++;
    $row++;
    
} while ($result = $stmt2->fetch(PDO::FETCH_ASSOC));


$writer = \PhpOffice\PhpSpreadsheet\IOFactory::createWriter($spreadsheet, 'Xls');
$writer->save($file_name);
// Save a copy of the report for each report downloaded by processors
$writer->save("./reports/IAR/" . $file_name);

header('Content-Type: application/x-www-form-urlencoded');
header('Content-Transfer-Encoding: Binary');
header("Content-disposition: attachment; filename=\"" . $file_name . "\"");
readfile($file_name);
unlink($file_name);

$conn = null;

echo "<script>window.location='deliveryEntry.php?i=$iarID'</script>";
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