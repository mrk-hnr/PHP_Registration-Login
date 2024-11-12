<?php

function render_success_message() {

    if (isset($_SESSION["signup_sucess"])) {

        $message = $_SESSION["signup_sucess"];
        echo "<center><h2 style='color:dodgerblue'> {$message} </h2></center>";
    
        unset($_SESSION["signup_sucess"]);
    }
}