<?php


if (isset($_GET['id']) && is_numeric($_GET['id']))

{
	$id = $_GET['id'];
	$room_id=$_GET['rid'];


$connection = mysql_connect("localhost", "root", "rootadmin");
//Selecting Database
$db = mysql_select_db("medserv", $connection);


//	include 'connection.php';

	//$sql = 'DELETE FROM events WHERE id="'.$id.'"';

	//if($conn->query($sql)){
	//	echo "Deleted Successfully";
	$result = mysql_query("DELETE FROM events WHERE id='".$id."'",$connection)
 	or die(mysql_error()); 


	switch ($room_id) {
		case 'fr':
		header("Location:fr_index.php");
		break;
		case 'avr1':
		header("Location:avr1_index.php");
		break;
		case 'avr2':
		header("Location:avr2_index.php");
		break;
	
	default:
		# code...
		break;
}



	//}
	//else
	//{
	//	echo "Error deleting record: " . $conn->error;
	//}
		
}



?>