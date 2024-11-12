<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="static/style.css?v=<?php echo time(); ?>">
    <title>Register</title>

  </head>
  <body>
    <div class="center">
      <h1>Register</h1>

      <!-- <center><h2 style='color: firebrick'>Test</h2></center> -->
       <?php
       require_once "includes/register-views.php";
       render_errors();
       ?>

        
      <form method="POST" action="includes/register-user.php">
      
        <div class="txt_field">
          <input type="text" required name="username">
          <span></span>
          <label>Username</label>
        </div>

        <div class="txt_field">
          <input type="text" required name="email">
          <span></span>
          <label>Email</label>
        </div>

        <div class="txt_field">
          <input type="password" required name="password">
          <span></span>
          <label>Password</label>
        </div>

        <div class="txt_field">
          <input type="password" required name="confirm_password">
          <span></span>
          <label>Confirm Password</label>
        </div>
    

        <!-- <div class="pass">Forgot Password?</div> -->
        <input type="submit" value="Register">
        <div class="signup_link">
          Already have an account? <a href="login.php">Login</a>
        </div>
      </form>
    </div>

  </body>
</html>