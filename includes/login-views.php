<?php

function render_message() {

    if (isset($_SESSION["signup_sucess"])) {

        $message = $_SESSION["signup_sucess"];
        echo "<center><h2 style='color:dodgerblue'> {$message} </h2></center>";
    
        unset($_SESSION["signup_sucess"]);
    }

    if (isset($_SESSION["login_error"])) {

        $error = $_SESSION["login_error"];
    
        foreach ($error as $err) {
            echo "<center><h2 style='color:firebrick'> {$err} </h2></center>";
        }
    
        unset($_SESSION["login_error"]);
    }
    
}


