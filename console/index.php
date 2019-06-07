<?php
session_start();

if (!empty($_SESSION['user_email'])) {

    header('Location: notices/');
    exit();
}
else{
    header('Location: login.php');
    exit();
}
?>

