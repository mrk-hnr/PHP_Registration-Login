<?php

if (isset($_GET["deleteID"])) {
    $dbID = (int)$_GET["deleteID"];
    sleep(3);

    try {
        require_once "db.php";
        require_once "user-models.php";
        require_once "validator.php";

        $validate_delete = new validateDelete($dbID, $pdo);
        $_SESSION["user"] = $validate_delete->delete_user_data();



        header("location: ../login-register.php");
        die();


    } catch (PDOException $error) {
        die("SQL Query Failed: " . $error->getMessage());
    }

}
