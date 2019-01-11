<?php
include_once 'registerprocess.php';


?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>School Reservation</title>
    <link rel="stylesheet" type="text/css" href="styled.css">
    <!--For Icons-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css"
    integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz"
    crossorigin="anonymous">





  </head>
  <body>
  <div class="login-box">
    <h1>Register</h1>

      <form action="register.php" method="POST">

      <div class="error-message"><p><?php print $errorMessage;?></p></div>
      <div class="textbox">
        <i class="fa fa-user" aria-hidden="true"></i>
        <input type="text" placeholder="Username" name="username" value="<?php print $username;?>"/>
      </div>

     <div class="textbox">
        <i class="fa fa-lock" aria-hidden="true"></i>
        <input type="password" placeholder="Confirm Password" name="password1" value="<?php print $password1;?>"/>
      </div>

      <div class="textbox">
        <i class="fa fa-lock" aria-hidden="true"></i>
        <input type="password" placeholder="Confirm Password" name="password2" value="<?php print $password2;?>"/>
      </div>

      <div class="textbox">
      <i class="fa fa-envelope" aria-hidden="true"></i>
      <input type="text" placeholder="Email" name="email" value="<?php print $email;?>"/>
      </div>

      <input class="btn" type="submit" name="register" value="Register"/>

      <div class="reg-user"><p>Have an account?<a href="index.php" class="account"> Log-In</a></p></div>

      </form>

  </div>
  </body>
</html>
