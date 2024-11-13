<?php

function render_errors() {
    
    if (isset($_SESSION["signup_error"])) {

        $error = $_SESSION["signup_error"];

        foreach ($error as $err) {
            echo "<center><h2 class='error-register'> {$err} </h2></center>";
        }

        unset($_SESSION["signup_error"]);
    }
}