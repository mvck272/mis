<?php
	include '../server/server.php';
    session_start();

    session_destroy();
    unset($_SESSION['name']);
    unset($_SESSION['user_type']);

    $action = "Logout";
    $details = "Successfull logout!";
    logActivity($action, $details);

    header('Location: ../login.php');
    exit();
?>