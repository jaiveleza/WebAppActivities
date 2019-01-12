
<?php
session_start();
if (!isset($_SESSION['login_user'])) {
  header("Location: home.php");
}
  $username=$_SESSION['login_user'];

if (isset($_GET['id']) && is_numeric($_GET['id']))

{
$id=$_GET['id'];
//$status=['stat'];
//$rid=$_GET['rid'];
$connection = mysql_connect("localhost", "root", "rootadmin");
//Selecting Database
$db = mysql_select_db("medserv", $connection);

$sql = "SELECT * FROM `events` WHERE id='".$id."'";
$query = mysql_query($sql);
while($row=mysql_fetch_array($query)){

$status = $row['status'];
$rid = $row['room_id'];



$status_r = ( $status == 1) ? 0 : 1;

echo $status_r;
echo $rid;


	$sql1="UPDATE `events` 
		   SET status = '".$status_r."' 
		   WHERE id='$id'
		";
		$query2 = mysql_query($sql1);
}
	header("Location:listreservation.php?rid=$rid");
}

?>

