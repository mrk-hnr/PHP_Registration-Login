<?php
if (isset($_SESSION["user"])) {
  header("location: index.php");
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="styles/style.css?v=<?php echo time(); ?>">
    <title>Login</title>

  </head>
  <body>
<!-- ------------------------------------------------ -->
<!-- ------------------- REGISTER ------------------- -->
<!-- ------------------------------------------------ -->

  <div class="container" id="container">


      <div class="form-container sign-up-container">
        <form method="POST" action="includes/register-user.php">

        <h2>Create Account</h2>
        <div class="social-container">
              <a href="" class="social"><img src="./assets/twitter.svg" alt=""></a>
              <a href="" class="social"><img src="./assets/linkedin.svg" alt=""></a>
              <a href="" class="social"><img src="./assets/google.svg" alt=""></a>
            </div>
            <span>or use your email for registration</span>

            <div class="infield">
              <input type="text" required name="username" placeholder="Username">
              <label></label>
            </div>

            <div class="infield">
              <input type="text" required name="email" placeholder="email">
              <label></label>
            </div>

            <div class="infield">
              <input type="password" required name="password" placeholder="Password">
              <label></label>
            </div>

            <div class="infield">
              <input type="password" required name="confirm_password" placeholder="Retype Password">
              <label></label>
            </div>

            <button>Sign Up</button>


        </form>
      </div>
<!-- ------------------------------------------------ -->
<!-- ------------------- SIGN IN -------------------- -->
<!-- ------------------------------------------------ -->

      <div class="container" id="container">
        <div class="form-container sign-in-container">
          <form method="POST" action="includes/login-user.php">
            <h2>Sign In</h2>

            <div class="social-container">
              <a href="" class="social"><img src="./assets/twitter.svg" alt=""></a>
              <a href="" class="social"><img src="./assets/linkedin.svg" alt=""></a>
              <a href="" class="social"><img src="./assets/google.svg" alt=""></a>
            </div>
            <span>or use your account</span>

            <div class="infield">
              <input type="text" required name="username" placeholder="Username">
              <label></label>
            </div>

            <div class="infield">
              <input type="password" required name="password" placeholder="Password">
              <label></label>
            </div>
            <a href="#" class="forgot">Forgot your password?</a>
            <button>Sign In</button>
          </form>




        </div>
      </div>



      <div class="overlay-container" id="overlayCon">
            <div class="overlay">

            <div class="overlay-panel overlay-left">
                    <h1>Welcome Back!</h1>
                    <p>To keep connected with us please login with your personal info</p>
                    <button id="signIn">Sign In</button>
                </div>

                <div class="overlay-panel overlay-right">
                    <h2>Hello, Friend!</h2>
                    <p>Enter your personal details and start journey with us</p>
                    <button>Sign Up</button>
                </div>
            </div>
            <button id="overlayBtn"></button>
        </div>

      </div>

  <footer>
    <mark>See more on <a href="https://www.youtube.com/channel/UCHIkJZkap10qGFHq5ViIExg">Karacode</a></mark>
</footer>


<?php echo "<script src='script.js'></script>" ?>
  </body>
</html>