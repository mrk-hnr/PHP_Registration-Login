<?php
declare(strict_types=1);

class ValidateRegistration {

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

        if (!empty(get_user_username($this->pdo, $this->username))) {
            $error["username_exist"] = "Username already exist";
        }

        if (!empty(get_user_email($this->pdo, $this->email))) {
            $error["email_exist"] = "Email already in use";
        }

        if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            $error["invalid_email"] = "Email is not valid";
        }



        if ($this->password !== $this->confirm_password) {
            $error["password_mismatch"] = "Password does not match";
        }

        if (strlen($this->password) < 5) {
            $error["password_length_error"] = "Password should be more than 5 characters";
        }


        if (!empty($error)) {
            $_SESSION["signup_error"] = $error;
            header("location: ../login-register.php");
            die();
        }

    }
}


class ValidateLogin {

    private $username;
    private $password;
    private $pdo;

    function __construct(string $username, string $password, object $pdo) {
        $this -> username = $username;
        $this -> password = $password;
        $this -> pdo = $pdo;
    }

    function get_user_data() {
        return get_user_username($this->pdo, $this->username); // func in user-models
    }

    function validate_data() {

        $error = [];
        $user = $this->get_user_data();

        if ( empty($this->username) || empty($this->password) ) {
            $error["incomplete_form"] = "Please fill all fields";
        }

        if (!$user) {
            $error["invalid_username"] = "Invalid Username";
        }

        if ($user && !password_verify($this->password, $user["pass"])) {
            // "pass" is the name of the column in MySQL
            //  !password_verify means it cannot verify the password
            $error["invalid_password"] = "Invalid Password";
        }

        if (!empty($error)) {
            $_SESSION["login_error"] = $error;
            header("location: ../login-register.php");
            die();
        }
    }
}

class ValidateDelete {
    private $id;
    private $pdo;

    function __construct(int $id, object $pdo) {
        $this -> id = $id;
        $this -> pdo = $pdo;
    }

    function delete_user_data() { // validator
        return delete_user_data($this->pdo, $this->id); // user-models
    }
}