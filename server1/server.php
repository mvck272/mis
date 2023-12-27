<?php
$dsn        = 'mysql:host=localhost;dbname=mis;charset=utf8mb4';
$username   = 'root';
$password   = '';

ini_set('display_errors', 1);
error_reporting(E_ALL);

try {
    $conn = new PDO($dsn, $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}

if (!isset($_SESSION)) {
    session_start();
}
if (!isset($_SESSION['name'])) {
    header('Location: login.php');
}

// Function to log activities
if (!function_exists('logActivity')) {
    function logActivity($action, $details) {
        global $conn;

        $action = htmlspecialchars($action); // Sanitize the input
        $details = htmlspecialchars($details); // Sanitize the input
        $timestamp = date('Y-m-d H:i:s');

        try {
            $stmt = $conn->prepare("INSERT INTO activity_log (action, details, timestamp) VALUES (:action, :details, :timestamp)");
            $stmt->bindParam(':action', $action);
            $stmt->bindParam(':details', $details);
            $stmt->bindParam(':timestamp', $timestamp);
            $stmt->execute();
        } catch (PDOException $e) {
            die("Error logging activity: " . $e->getMessage());
        }
    }
}
?>
