<?php
session_start(); // start the session

// check if the user is logged in
if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
    // unset all session variables
    $_SESSION = array();

    // destroy the session
    session_destroy();

    // redirect to the login page or any other desired page
    header('Location: login.php');
    exit;
} else {
    // if the user is not logged in, redirect to the login page
    header('Location: login.php');
    exit;
}
