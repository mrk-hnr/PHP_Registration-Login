<?php

// Checks POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];

    try {
        require_once "db.php";
        require_once "validator.php";
        require_once "user-models.php";
    
        $validate_user_data = new ValidateRegistration($username, $email, $password, $confirm_password, $pdo);
        $validate_user_data->validate_data();
    
        create_user($pdo, $username, $email, $password);
        
        $_SESSION["signup_success"] = "Sign up Successful!";
    
        header("location: ../login-register.php");
        die();

    } catch(PDOException $error) {
        die("SQL Query Failed: " . $error->getMessage());
    }

} else {
    header("location: ../login-register.php");
}