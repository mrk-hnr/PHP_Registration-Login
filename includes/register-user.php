<?php

// Check for incoming POST request
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    // Put POST Data into variables
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $password_confirm = $_POST["password_confirm"];

    require_once "Validation.php";



} else {
    header("Location: ../register.php");
}