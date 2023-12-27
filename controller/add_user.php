<?php
require '../server/server.php';
$name = $_POST['name'];
$password = md5($_POST['password']);
$user_type = $_POST['user_type'];

$stmt = $conn->prepare("INSERT INTO users (name, password, user_type, date) VALUES (:name, :password, :user_type, CURRENT_TIMESTAMP)");
$stmt->bindParam(':name', $name);
$stmt->bindParam(':password', $password);
$stmt->bindParam(':user_type', $user_type);
$stmt->execute();

$action = "Add"; 
$details = "Added a new user: $name"; 
logActivity($action, $details);

header("Location: ../user.php");
exit;
?>
 