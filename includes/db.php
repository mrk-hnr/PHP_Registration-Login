<?php

session_start();
// DSN = Data Source Name
// $DSN = "mysql:host=localhost;dbname=php_register-login"; 
// $DBUsername = "root";
// $DBPassword = "";

// try {
//     // PDO = PHP Data Objects
//     $PDO = new PDO($DSN, $DBUsername, $DBPassword);


//  // If error, throw an exception
//     $PDO -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// } catch(PDOException $error) {
//     echo "Connection Failed: " . $error -> getMessage();
// }

// METHOD 2

$host = "localhost";
$DBName = "php_register-login";
$DBUsername = "root";
$DBPassword = "";
$DSN = "mysql:host=localhost;dbname=php_register-login"; 

try {

    $pdo = new PDO("mysql:host=$host;dbname=$DBName", $DBUsername, $DBPassword);

// If error, throw an exception
    $pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch(PDOException $error) {
    echo "Connection Failed: " . $error -> getMessage();
}