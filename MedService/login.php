<?php
session_start();
$username="";
$password="";

$errorMessage="";
$num_rows="";

//Connect to database
//$connection=mysql_connect('localhost', 'root', 'rootadmin');
//$db=mysql_select_db('medserv', $connection);
$db = mysqli_connect("sql3.freemysqlhosting.net", "sql3273664", "KQbSlbH91h", "sql3273664");

if(isset($_POST['submit']))
{
    if(empty($_POST['username']) && empty($_POST['password']))
    {
    $errorMessage = $errorMessage."Username or Password is incorrect!"."<BR/>";
    }

      if($errorMessage == "")
      {
        $username=$_POST['username'];
        $password=$_POST['password'];

        //Security
        $username= htmlspecialchars($username);
        $password= htmlspecialchars($password);

        $username = stripslashes($username);
        $password = stripslashes($password);

        $username = mysqli_real_escape_string($db, $username);
        $password = mysqli_real_escape_string($db, $password);

        //Connect to database
        //$connection=mysql_connect("localhost", "root", "rootadmin");
        //$db=mysql_select_db("medserv", $connection);

        //$sql = "SELECT * FROM users WHERE `username`='".$username."' AND `password`='".$password."'";
		$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
        $query = mysqli_query($db, $sql );
        $num_rows=mysqli_num_rows($query);

	while($row=mysqli_fetch_array($query)){
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
          mysqli_close($db);

        }

      }
}


?>
