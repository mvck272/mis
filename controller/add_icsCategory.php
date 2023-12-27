<?php
require '../server/server.php';
$ics_code = strtoupper($_POST['ics_code']);
$category = strtoupper($_POST['category']);

$stmt = $conn->prepare("INSERT INTO ics_category (ics_code, category, date) VALUES (:ics_code, :category, CURRENT_TIMESTAMP)");
$stmt->bindParam(':ics_code', $ics_code);
$stmt->bindParam(':category', $category);
$stmt->execute();

header("Location: ../ics1.php");
exit;
?>
 