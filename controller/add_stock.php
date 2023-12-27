<?php
require '../server/server.php';

$fund = $_POST['fund'];
$inv_type = $_POST['inv_type'];
$exp_type = $_POST['exp_type'];
$item = $_POST['item'];
$unit = $_POST['unit'];
$stock_no = $_POST['stock_no'];
$stock_desc = $_POST['stock_desc'];

$stmt = $conn->prepare("SELECT code FROM uacs_inv WHERE acct_title = :inv_type");
$stmt->bindParam(':inv_type', $inv_type);
$stmt->execute();
$result = $stmt->fetch(PDO::FETCH_ASSOC);
$code = $result['code'];

// Retrieve the latest stock number for the selected fund from the database
$stmt = $conn->prepare("SELECT MAX(stock_no) AS max_stock_no FROM stock_tbl WHERE fund = :fund");
$stmt->bindParam(':fund', $fund);
$stmt->execute();
$result = $stmt->fetch(PDO::FETCH_ASSOC);
$maxStockNo = $result['max_stock_no'];

// Extract the fund prefix from the stock number
$fundPrefix = substr($stock_no, 0, strpos($stock_no, '-'));
$stockPrefix = '';

if ($fundPrefix !== false) {
    $stockPrefix = $fundPrefix . '-';
}

// Increment the stock number by 1
$nextStockNo = sprintf('%04d', intval(substr($maxStockNo, -4)) + 1); // Format the stock number to have leading zeros

$newStockNo = $stockPrefix . $nextStockNo;

$stmt = $conn->prepare("INSERT INTO stock_tbl (fund, inv_type, exp_type, item, unit, stock_no, stock_desc) VALUES (:fund, :inv_type, :exp_type, :item, :unit, :stock_no, :stock_desc)");
$stmt->bindParam(':fund', $fund);
$stmt->bindParam(':inv_type', $inv_type);
$stmt->bindParam(':exp_type', $exp_type);
$stmt->bindParam(':item', $item);
$stmt->bindParam(':unit', $unit);
$stmt->bindParam(':stock_no', $newStockNo); 
$stmt->bindParam(':stock_desc', $stock_desc);
$stmt->execute();

$action = "Add";
$details = "Added a new stock: $item - $stock_desc";
logActivity($action, $details);

header("Location: ../stock.php");
exit;
?>
