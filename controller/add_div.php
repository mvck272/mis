<?php
require '../server/server.php';
$name = strtoupper($_POST['name']);
$acname = strtoupper($_POST['acname']);
$rcc = $_POST['rcc'];
$status = $_POST['status'];

$stmt = $conn->prepare("INSERT INTO dept (name, acname, rcc, status, date) VALUES (:name, :acname, :rcc, :status, CURRENT_TIMESTAMP)");
$stmt->bindParam(':name', $name);
$stmt->bindParam(':acname', $acname);
$stmt->bindParam(':rcc', $rcc);
$stmt->bindParam(':status', $status);
$stmt->execute();

$action = "Add";
$details = "Added a new Division/Field Office : $name";
logActivity($action, $details);

header("Location: ../dept.php");

exit;
?>
 