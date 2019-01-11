<?php
session_start();
$username="";
$password="";

$errorMessage="";
$num_rows="";

if(isset($_POST['submit']))
{
    if(empty($_POST['username']) && empty($_POST['password']))
    {
    $errorMessage = $errorMessage."Username or Password is incorrect!"."<BR/>";
    }
  //  if(empty($_POST['username']))
  //  {
  //  $errorMessage = $errorMessage."Please type your username."."<BR/>";
  //  }
  //  if(empty($_POST['password']))
  //  {
  //  $errorMessage = $errorMessage."Please type your password."."<BR/>";
  //  }

      if($errorMessage == "")
      {
        $username=$_POST['username'];
        $password=$_POST['password'];

        //Security
        $username= htmlspecialchars($username);
        $password= htmlspecialchars($password);

        $username = stripslashes($username);
        $password = stripslashes($password);

        $username = mysql_real_escape_string($username);
        $password = mysql_real_escape_string($password);

        //Connect to database
        $connection=mysql_connect("localhost", "root", "rootadmin");
        $db=mysql_select_db("medserv", $connection);

     // $sql = "SELECT * FROM users WHERE `username`='".$username."' AND `password`='".$password."'";
        $sql = "SELECT * FROM users WHERE `username`='".$username."' AND `password`='".$password."'";
        $query = mysql_query($sql);
        $num_rows=mysql_num_rows($query);
        while($row=mysql_fetch_array($query)){
        $user_type = $row['user_type'];  

          if($num_rows == 1 && $user_type=="USER")
          {
            $_SESSION['login_user']=$username;
            header("Location: home.php");
          }
          else
          {
          $errorMessage = $errorMessage."Username or password is invalid!";
          }
          mysql_close($connection);

          }


        }


}


?>
