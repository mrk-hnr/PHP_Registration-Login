<?php

// Checks POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];

    require_once "db.php";
    require_once "validator.php";
    require_once "user-models.php";

    $validate_user_data = new Validate($username, $email, $password, $confirm_password, $pdo);
    $validate_user_data->validate_data();

    create_user($pdo, $username, $email, $password);

    header("location: ../login.php");
    die();

} else {
    header("location: ../register.php");
}