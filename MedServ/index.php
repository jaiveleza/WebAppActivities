<?php
include('login.php');
if(isset($_SESSION['login_user'])){
  header("Location:home.php");
}


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
    <h1>MedServ</h1>

      <form action="index.php" method="POST">

      <div class="error-message"><p><?php print $errorMessage;?></p></div>

      <div class="textbox">
        <i class="fa fa-user" aria-hidden="true"></i>
        <input type="text" placeholder="Username" name="username" value="<?php print $username;?>"/>
      </div>

      <div class="textbox">
        <i class="fa fa-lock" aria-hidden="true"></i>
        <input type="password" placeholder="Password" name="password" value="<?php print $password;?>"/>
      </div>

      <input class="btn" type="submit" name="submit" value="Sign in"/>

      <div class="reg-user"><p>Not yet registered? <a href="register.php" class="account">Register</a></p></div>

      </form>

  </div>
  </body>
</html>
