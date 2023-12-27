<?php
require '../server/server.php';
$name = $_POST['name'];
$desig = $_POST['desig'];
$status = $_POST['status'];
$id = $_POST['id'];

    // Prepare the query
    $stmt = $conn->prepare("UPDATE employee SET name = :name, desig = :desig, status = :status WHERE id = :id");
    
    // Bind the parameters and execute the statement
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':desig', $desig);
    $stmt->bindParam(':status', $status);
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    
    $action = "Edit";
    $details = "Edited a employee details named: $name";
    logActivity($action, $details);

    header("Location: ../employee.php");
$pdo = null;
?>