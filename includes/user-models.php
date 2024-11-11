<?php

declare(strict_types=1);

function getUsername(object $PDO, string $username) {

    // $query = "SELECT id, username, email FROM users WHERE username = :username";
    $query = "SELECT * FROM users WHERE username = :username;";

    $statement = $PDO -> prepare($query);
    $statement -> bindparam(":username", $username);
    $statement -> execute();
    $result = $statement -> fetch(PDO::FETCH_ASSOC);

    return $result;
}

