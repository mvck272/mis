<?php
require '../server/server.php';

$rsmi_no = $_POST['rsmi_no'];

$stmt = $conn->prepare("INSERT INTO rsmi (rsmi_no, date) VALUES (:rsmi_no, CURRENT_TIMESTAMP)");
$stmt->bindParam(':rsmi_no', $rsmi_no);
$stmt->execute();

header("Location: ../rsmi.php");
exit;
?>