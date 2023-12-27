<?php
require '../server/server.php';
$name = strtoupper($_POST['name']);
$desig = strtoupper($_POST['desig']);
$status = $_POST['status'];

$stmt = $conn->prepare("INSERT INTO employee (name, desig, status, date) VALUES (:name, :desig, :status, CURRENT_TIMESTAMP)");
$stmt->bindParam(':name', $name);
$stmt->bindParam(':desig', $desig);
$stmt->bindParam(':status', $status);
$stmt->execute();

$action = "Add";
$details = "Added a new employee name: $name";
logActivity($action, $details);

header("Location: ../employee.php");
exit;
?>
 