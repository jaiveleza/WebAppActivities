
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

//Selecting Database
    $connection = mysql_connect("sql3.freemysqlhosting.net", "sql3273664", "KQbSlbH91h");
    $db = mysql_select_db("sql3273664", $connection);

$sql = "SELECT * FROM `events` WHERE id='".$id."'";
$query = mysql_query($sql);
while($row=mysql_fetch_array($query)){

$status = $row['status'];
$rid = $row['room_id'];



$status_r = ( $status == 1) ? 0 : 1;

echo $status_r;
echo $rid;


	$sql1="DELETE FROM `events` 
		   WHERE id='$id'
		";
		$query2 = mysql_query($sql1);
}
	header("Location:listreservation.php?rid=$rid");
}

?>

