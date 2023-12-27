<?php
require '../server/server.php';
$acct_title = $_POST['acct_title'];
$code = $_POST['code'];
$id = $_POST['id'];

// try {
//     // Check if the code already exists in the database
//     $query = "SELECT code FROM uacs_inv WHERE code = :code";
//     $stmt = $conn->prepare($query);
//     $stmt->bindParam(':code', $code);
//     $stmt->execute();
//     $codeExists = $stmt->rowCount() > 0;

//     // If the code already exists, display an error message and redirect back
//     if ($codeExists) {
//         echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.4/dist/sweetalert2.all.min.js"></script>';
//         echo '<script>
//             document.addEventListener("DOMContentLoaded", function() {
//                 Swal.fire({
//                     title: "Error",
//                     text: "The code already exists in the database.",
//                     icon: "error",
//                     confirmButtonText: "OK"
//                 }).then(function() {
//                     window.location.href = "../uacs_inv.php";
//                 });
//             });
//         </script>';
//         exit();
//     }


    // Prepare the query
    $stmt = $conn->prepare("UPDATE uacs_exp SET acct_title = :acct_title, code = :code WHERE id = :id");
    
    // Bind the parameters and execute the statement
    $stmt->bindParam(':acct_title', $acct_title);
    $stmt->bindParam(':code', $code);
    $stmt->bindParam(':id', $id);
    $stmt->execute();

    $action = "Edit";
    $details = "Edited a UACS-Expenses details named: $acct_title";
    logActivity($action, $details);

    header("Location: ../uacs_exp.php");
//     exit();
// } catch (PDOException $e) {
//     echo "Error: " . $e->getMessage();
// }

// Don't forget to close the database connection
$pdo = null;
?>
