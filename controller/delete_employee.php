<?php
require '../server/server.php';

if (isset($_POST['id'])) {
    $id = $_POST['id'];

    try {
        // Prepare the delete statement
        $stmt = $conn->prepare("DELETE FROM employee WHERE id = :id");
        
        // Bind the parameter
        $stmt->bindParam(':id', $id);
        
        // Execute the query
        if ($stmt->execute()) {
            echo 'success';

            $action = "Delete";
            $details = "Deleted a Employee!";
            logActivity($action, $details);

        } else {
            echo 'error';
        }
    } catch (PDOException $e) {
        echo 'error';
    }
    
}
header("Location: ../employee.php");
    exit;
?>