<?php
require '../server/server.php';
$name = $_POST['name'];
$acname = $_POST['acname'];
$rcc = $_POST['rcc'];
$status = $_POST['status'];
$id = $_POST['id'];

    // Prepare the query
    $stmt = $conn->prepare("UPDATE dept SET name = :name, acname = :acname, rcc = :rcc, status = :status WHERE id = :id");
    
    // Bind the parameters and execute the statement
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':acname', $acname);
    $stmt->bindParam(':rcc', $rcc);
    $stmt->bindParam(':status', $status);
    $stmt->bindParam(':id', $id);
    $stmt->execute();

    $action = "Edit"; // Set the action as "Edit" for editing a stock
    $details = "Edited Division/ Field Office: $name"; // Customize the details as needed
    logActivity($action, $details);

    header("Location: ../dept.php");
$pdo = null;
?>