<?php
session_start();

if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (isset($_SESSION['users']) && isset($_SESSION['users'][$username]) && $_SESSION['users'][$username]['password'] === $password) {
        $_SESSION['username'] = $username;
        echo 'success';
    } else {
        echo 'failure';
    }
}
?>
