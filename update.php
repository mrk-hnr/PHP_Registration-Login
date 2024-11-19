<?php

include('includes/db.php');
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="styles/style.css?v=<?php echo time(); ?>">

    <title>Edit Profile</title>
</head>
<body class="edit-body">
    
    <div class="container">

      <div class="edit-nav">
        <h3>Edit Profile</h3>
        <a href="./index.php">BACK</a>
      </div>
      
      <?php
      if(isset($_GET['id'])) {

        $user_id = $_GET['id'];       

        $query = "SELECT * FROM users WHERE id=:id LIMIT 1";
        $statement = $pdo->prepare($query);
        $data = [':id' => $user_id];
        $statement->execute($data);

        $result = $statement->fetch(PDO::FETCH_OBJ); // PDO::FETCH_ASSOC

        } ?>

      <form action="includes/update-user.php" method="POST">
        <input type="hidden" name="user_id" value="<?php echo $result->id?>" />
        
        <div class="input-group">
          <input class="input" required autocomplete="off" type="text" name="username" id="username" >
          <label class="label" for="username">Username</label>
        </div>

        <div class="input-group">
          <input class="input" required autocomplete="off" type="text" name="email" id="email" >
          <label class="label" for="email">Email</label>
        </div>

        <div class="input-group">
          <input class="input" required autocomplete="off" type="password" name="password" id="password" >
          <label class="label" for="password">Password</label>
        </div>

        <div class="input-group">
          <input class="input" required autocomplete="off" type="password" name="password" id="confirm_password" >
          <label class="label" for="password">Retype Password</label>
        </div>


        <!-- <div>
          <input type="text" placeholder="<?= $result->username; ?>" required />
        </div> 

        <div>
          <label>Email</label>
          <input type="text" name="email" value="<?= $result->email; ?>" />
        </div> 
        
        <div>
          <label>Password</label>
          <input type="text" name="password" placeholder="<?= $result->pass; ?>" required />
        </div> 
        
        <div>
          <label>Retype Password</label>
          <input type="text" name="confirm_password" placeholder="<?= $result->pass; ?>" required />
        </div> -->
        
        <div>
          <button type="submit" name="update_user" class="btn btn-primary">Save Changes</button>
        </div>

      </form>

    </div>





  </body>
</html>