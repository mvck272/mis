<?php
session_start();
include '../server/server.php';

$name = $_POST['name'];
$password = md5($_POST['password']);

if (!empty($name) && !empty($password)) {
    $query = "SELECT * FROM users WHERE name = :name AND password = :password";

    $stmt = $conn->prepare($query);
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':password', $password);
    $stmt->execute();

    

    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($result) {
        $_SESSION['id'] = $result['id'];
        $_SESSION['name'] = $result['name'];
        $_SESSION['user_type'] = $result['user_type'];

        $_SESSION['message'] = 'You have successfully logged in!';
        $_SESSION['success'] = 'success';

        $action = "Login";
        $details = "Successfull login $name!";
        logActivity($action, $details);

        header('location: ../index.php');
        exit();
    } else {
        $_SESSION['message'] = 'Username or password is incorrect!';
        $_SESSION['success'] = 'danger';

        $action = "Login";
        $details = "Login Failed!";
        logActivity($action, $details);

        header('location: ../login.php');
        exit();
    }
}

$conn = null;
?>