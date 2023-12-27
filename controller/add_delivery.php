<?php
require '../server/server.php';

$fund = $_POST['fund'];
$req_dept = $_POST['req_dept'];
$del_no = $_POST['del_no'];
$del_date = $_POST['del_date'];
$supplier = $_POST['supplier'];
$po_no = $_POST['po_no'];
$po_date = $_POST['po_date'];
$qty = $_POST['qty'];
$unit_cost = $_POST['unit_cost'];

$currentYear = date('Y');

$stmt = $conn->prepare("SELECT COUNT(*) FROM delivery_entry WHERE YEAR(date) = :year AND fund = :fund");
$stmt->bindParam(':year', $currentYear);
$stmt->bindParam(':fund', $fund);
$stmt->execute();
$count = $stmt->fetchColumn();

$iar_no = $currentYear . '-' . str_replace('F-', '', $fund) . '-' . ($count + 1);

if (isset($_POST['stock_no']) && is_array($_POST['stock_no'])) {
        $qty = $_POST['qty'][0];
        
    foreach ($_POST['stock_no'] as $key => $stock_no) {
        $qty = $_POST['qty'][$key];
        $unit_cost = $_POST['unit_cost'][$key];
 
        $stmt = $conn->prepare("INSERT INTO delivery_entry (fund, req_dept, del_no, del_date, supplier, po_no, po_date, stock_no, qty, qty1, unit_cost, date, iar_no) VALUES (:fund, :req_dept, :del_no, :del_date, :supplier, :po_no, :po_date, :stock_no, :qty, :qty, :unit_cost, CURRENT_TIMESTAMP, :iar_no)");
        $stmt->bindParam(':fund', $fund);
        $stmt->bindParam(':req_dept', $req_dept);
        $stmt->bindParam(':del_no', $del_no);
        $stmt->bindParam(':del_date', $del_date);
        $stmt->bindParam(':supplier', $supplier);
        $stmt->bindParam(':po_no', $po_no);
        $stmt->bindParam(':po_date', $po_date);
        $stmt->bindParam(':stock_no', $stock_no);
        $stmt->bindParam(':qty', $qty);
        $stmt->bindParam(':unit_cost', $unit_cost);
        $stmt->bindParam(':iar_no', $iar_no);
        $stmt->execute();
    }
}

$action = "Add";
$details = "Added a Delivery Entry [IAR Number: $iar_no]";
logActivity($action, $details);

header("Location: ../deliveryEntry.php");
exit;
?>