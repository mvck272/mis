<?php
require '../server/server.php';

$inv_type = $_GET['inv_type'];

$stmt = $conn->prepare("SELECT code FROM uacs_inv WHERE acct_title = :inv_type");
$stmt->bindParam(':inv_type', $inv_type);
$stmt->execute();
$result = $stmt->fetch(PDO::FETCH_ASSOC);
$code = $result['code'];

echo $code;
?>
