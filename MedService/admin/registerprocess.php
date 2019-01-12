<?php
//variable declarations
$email = "";
$username = "";
$password="";
$password1 ="";
$password2 = "";

$errorMessage = "";

$num_rows = 0;

//connect to database
$user_name = "root";
$pass_word = "rootadmin";
$database = "medserv";
$server = "localhost";

$db_handle = mysql_connect($server, $user_name, $pass_word);

//if($_SERVER['REQUEST_METHOD'] =='POST')
if(isset($_POST['register']))
{

      $username =$_POST['username'];
      $email = $_POST['email'];
      $password1 =$_POST['password1'];
      $password2 = $_POST['password2'];

      $username = htmlspecialchars($username);
      $email = htmlspecialchars($email);
      $password1 = htmlspecialchars($password1);
      $password2 = htmlspecialchars($password2);


      if (empty($username) && empty($password1) && empty($password2) && empty($email))
      {
        $errorMessage = $errorMessage."Fields are empty". "<BR>";
      }
      if(empty($username)){
        $errorMessage = $errorMessage."Please put your username". "<BR>";
        }
  
      if(empty($email)){
        $errorMessage = $errorMessage."Please put your email". "<BR>";
      }
      if(empty($password1)){
        $errorMessage = $errorMessage."Please put your password". "<BR>";
      }
      if(empty($password2)){
        $errorMessage = $errorMessage."Please confirm your password". "<BR>";
      }

      if($password1!=$password2)
      {
        $errorMessage = $errorMessage. "Password didn't match";
        
      }


    if($errorMessage == "")
    {

      $password = $password1;
      $db_found = mysql_select_db($database, $db_handle);

      if($db_found)
      {

      $sql_u = "SELECT * FROM users WHERE username= '$username'";
      $sql_e = "SELECT * FROM users WHERE email= '$email'";

      $res_u = mysql_query($sql_u);
      $res_e = mysql_query($sql_e);

        if (mysql_num_rows($res_u) > 0)

        {
        $errorMessage = "Sorry... username already taken";  
        }

        else if(mysql_num_rows($res_e) > 0)

        {
        $errorMessage = "Sorry... email already taken"; 
        }

        else
        {
     
          $sql = "INSERT INTO  users (username, password, email)
                  VALUES ('$username', '$password', '$email')";

                  $result = mysql_query($sql,$db_handle);
                  $mysql_close = ($db_handle);

                 echo    "<script>
                          alert('Successfully Registered');
                          window.location.href='index.php';
                          </script>";
              

                 

                  //header("Location: index.php");

          }

      }
      else
      {
      $errorMessage = "Database Not Found";
      }

    }
}
// We then check if the user has clicked the submit button

?>
