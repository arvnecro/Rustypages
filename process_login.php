<?php
include 'db_connect.php';
include 'functions.php';
 
sec_session_start(); // Our custom secure way of starting a PHP session.
 
if (isset($_POST['email'], $_POST['password'])) {
    $email = $_POST['email'];
    $password = hash("sha256",$_POST['password']); // The hashed password.
 
    if (login($email, $password, $mysqli) == true) {
        // Login success 
        header('Location: ./protected_page.php');
    } else {
        // Login failed 
        header('Location: ./profile.html');
    }
} else {
    // The correct POST variables were not sent to this page. 
    echo 'Invalid Request';
}