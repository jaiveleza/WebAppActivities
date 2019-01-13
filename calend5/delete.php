<?php


if (isset($_GET['id']) && is_numeric($_GET['id']))

{
	$id = $_GET['id'];

$connection = mysql_connect("localhost", "root", "rootadmin");
//Selecting Database
$db = mysql_select_db("event_calendar", $connection);


//	include 'connection.php';

	//$sql = 'DELETE FROM events WHERE id="'.$id.'"';

	//if($conn->query($sql)){
	//	echo "Deleted Successfully";
	$result = mysql_query("DELETE FROM events WHERE id='".$id."'",$connection)
 	or die(mysql_error()); 

		header("Location:index.php");
	//}
	//else
	//{
	//	echo "Error deleting record: " . $conn->error;
	//}
}



?>