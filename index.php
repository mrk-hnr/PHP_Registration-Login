<?php
session_start();

if (!isset($_SESSION["user"])) {
    header("location: login.php");
}
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
    <br><a href="logout.php">Logout</a>

    <?php 
    $user = $_SESSION["user"]["username"];
    $email = $_SESSION["user"]["email"];
    $id = $_SESSION["user"]["id"];


    
    echo "<br> {$user} - {$email} - {$id}

    <div>
        <a href='edit-user.php'>Edit</a>
        <a href='includes/delete-user.php?deleteID={$id}
            id='delete-button'
            onClick=\"javascript: return confirm('Please confirm deletion');\">Deactivate</a>
    </div>"

    ;?>





    

</body>
</html>
