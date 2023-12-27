<?php
require 'server/server.php';

if (isset($_POST['iar_no'])) {
    $iarNo = $_POST['iar_no'];
    
    // Perform a database query to check if IAR exists in the ris_entry table
    $stmt = $conn->prepare("SELECT COUNT(*) FROM ris_entry WHERE iar_no = :iar_no");
    $stmt->bindParam(':iar_no', $iarNo);
    $stmt->execute();
    $count = $stmt->fetchColumn();

    if ($count > 0) {
        echo "exists"; // IAR exists in the database
    } else {
        echo "not_exists"; // IAR doesn't exist in the database
    }
}
?>
