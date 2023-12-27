<?php 
    require '../server/server.php';

    $fund = $_POST['fund'];
    $inv_type = $_POST['inv_type'];
    $exp_type = $_POST['exp_type'];
    $item = $_POST['item'];
    $unit = $_POST['unit'];
    $stock_no = $_POST['stock_no'];
    $stock_desc = $_POST['stock_desc'];
    $id = $_POST['id'];

    $stmt = $conn->prepare("UPDATE stock_tbl SET fund = :fund, inv_type = :inv_type, exp_type = :exp_type, item = :item, unit = :unit, stock_no = :stock_no, stock_desc = :stock_desc WHERE id = :id");
    $stmt->bindParam(':fund', $fund);
    $stmt->bindParam(':inv_type', $inv_type);
    $stmt->bindParam(':exp_type', $exp_type);
    $stmt->bindParam(':item', $item);
    $stmt->bindParam(':unit', $unit);
    $stmt->bindParam(':stock_no', $stock_no);
    $stmt->bindParam(':stock_desc', $stock_desc);
    $stmt->bindParam(':id', $id);
    $stmt->execute();

    $action = "Edit";
    $details = "Edited a stocks details named: $item";
    logActivity($action, $details);

    header("Location: ../stock.php");
    exit;
?>