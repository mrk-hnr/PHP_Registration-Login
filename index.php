<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>
</head>
<body>
    <?php echo 'Hello world'; ?>
    <br><a href="#">Logout</a>


    <?php 

    
    echo "<br> {$_SESSION["user"]["username"]} - {$_SESSION["user"]["email"]}";

    ?>

</body>
</html>
