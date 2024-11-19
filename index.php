<?php

header("Cache-Control: no-cache, no-store, must-revalidate");
header("Pragma: no-cache");
header("Expires: 0");
session_start();

if (!isset($_SESSION["user"])) {
    header("location: login-register.php");
}

// require_once("./script.js");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css?v=<?php echo time(); ?>">
    <title>Document</title>
    
</head>
<body class="index-body">


    <?php 

    $user = $_SESSION["user"]["username"];
    $email = $_SESSION["user"]["email"];
    $id = $_SESSION["user"]["id"];
    

    echo "
    
    <div class='tab-container'>
        <ul class='tab-menu'>
            <li class='tab active'> <a href='#main-profile'>Main</a></li>

            <li class='tab'> <a href='#edit-profile'>Edit Profile</a></li>

            <li class='tab'> <a href='#deact-profile'>Deactivate Profile</a></li>

            <li class='tab'> <a href='#logout-profile'>Sign Out</a></li>
        </ul>

        <div class='tab-panels'>

        <div id='main-profile' class='panel'>
          <h3>Hello!</h3>
          <h2>Below are your account details:</h2>
          <p>Username: {$user}</p>
          <p>Email: {$email}</p>
          
        </div>

        <div id='edit-profile' class='panel'>
          <h3>Edit Profile</h3>
          <p>Update your information</p>
          <a href='update.php?id={$id}' class='index-button'>Edit</a>
        </div>

        <div id='deact-profile' class='panel'>
          <h3>Deactivate Profile</h3>
          <p>Deactivate your account. Your data will be deleted from the system</p>
          <a id='delete-button' class='index-button' href='includes/delete-user.php?deleteID={$id}
            id='delete-button'
            onClick=\"javascript: return confirm('Please confirm deletion');\">Deactivate</a>
        </div>

        <div id='logout-profile' class='panel'>
          <h3>Sign Out</h3>
          <p>Sign Out of your account</p>
          <a href='logout.php' class='index-button'>Sign Out</a>
        </div>

    </div>

    ";?>

<?php echo "<script src='./js/index.js'></script>" ?>
</body>
</html>

