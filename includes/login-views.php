<?php

function render_message() {

    if (isset($_SESSION["signup_success"])) {

        $message = $_SESSION["signup_success"];
        echo "<center><h2 class='success-register'> {$message} </h2></center>";
    
        unset($_SESSION["signup_success"]);
    }

    if (isset($_SESSION["login_error"])) {

        $error = $_SESSION["login_error"];
    
        foreach ($error as $err) {
            echo "<center><h2 class='error-login'> {$err} </h2></center>";
        }
    
        unset($_SESSION["login_error"]);
    }
    
}


