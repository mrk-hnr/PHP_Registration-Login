<?php

// Check for incoming POST request
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    // Put POST Data into variables
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $password_confirm = $_POST["password_confirm"];

    require_once "db.php";
    require_once "Validation.php";

    $validate_user_data = new Validate($username, $email, $password, $password_confirm, $PDO);

    $validate_user_data -> validateData();

    header("Location:  ../login.php");
    die();


} else {
    header("Location: ../register.php");
    die();
}