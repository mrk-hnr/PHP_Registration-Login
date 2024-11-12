<?php

declare(strict_types=1);

class Validate {

    

    private $username;
    private $email;
    private $password;
    private $confirm_password;
    private $pdo;

    function __construct(string $username, string $email, string $password, string $confirm_password, object $pdo) {
        $this -> username = $username;
        $this -> email = $email;
        $this -> password = $password;
        $this -> confirm_password = $confirm_password;
        $this -> pdo = $pdo;
    }

    function validate_data() {
        
        $error = [];

        if (empty($this->username) || empty($this->email) || empty($this->password) || empty($this->confirm_password)) {
            $error["incomplete_form"] = "Please fill all fields";
        }

        if ($this->password !== $this->confirm_password) {
            $error["password_mismatch"] = "Password does not match";
        }

        if (strlen($this->password) < 5) {
            $error["password_length_error"] = "Password should be more than 5 characters";
        }

        if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            $error["invalid_email"] = "Email is not valid";
        }

        if (!empty(get_user_username($this->pdo, $this->username))) {
            $error["username_exist"] = "Username already exist";
        }

        if (!empty(get_user_email($this->pdo, $this->email))) {
            $error["email_exist"] = "Email already in use";
        }

        if (!empty($error)) {
            $_SESSION["signup_error"] = $error;
            header("location: ../register.php");
            die();
        }

    }
}