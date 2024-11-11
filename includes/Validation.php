<?php

declare(strict_types=1);

class Validate {

    private $PDO;
    
    private $username;
    private $email;
    private $password;
    private $password_confirm;
    
    function __contruct( object $PDO,
                        string $username, 
                        string $email,
                        string $password,
                        string $password_confirm) {

        $this -> PDO = $PDO;
        $this -> username = $username;
        $this -> email = $email;
        $this -> password = $password;
        $this -> password_confirm = $password_confirm;    
    }

    function validateData() {

        $error = [];

        if (empty( $this -> username ) ||
            empty( $this -> email ) ||
            empty( $this -> password ) ||
            empty( $this -> password_confirm )) {

            $error["incomplete_form"] = "Pleae fill all fields";
        }

        if ($this -> password !== $this -> password_confirm) {
            $error["password_match_error"] = "Password does not match";
        }

        if (strlen( $this -> password) < 5) {
            $error["password_length_error"] = "Password must be more than 5 characters";
        }

        if (!filter_var( $this -> email, FILTER_VALIDATE_EMAIL)) {
            $error["invalid_email"] = "Invalid Email";
        }

    }



}