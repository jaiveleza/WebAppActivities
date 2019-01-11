<?php
session_start();
if (!isset($_SESSION['login_user'])) {
  header("Location: home.php");
}
  $username=$_SESSION['login_user'];

include_once('fr_functions.php');
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <title>MedServ</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="content.css" type="text/css"/>

<script src="jquery.min.js"></script> 
  </head>

  <body>
  <div class="container">

    <div class="navig">
	     <nav>
		       <div class="logo">
		           <img src = "img/Rlogo.png">
		       </div>
		         <ul>
			            <li><a href="home.php" >Home</a></li>
			 

			            <li><a href="fr_index.php" class="active">Facilities</a></li>
			            <li><a href="contact.php">Contact</a></li>

			            <li class="log-out"><a href="logout.php">Logout</a></li>
		         </ul>
	     </nav>
     </div>



     	
      <div class="main_body">

      <div id="room_content">

      <div id='cssmenu'>
      <ul>
        <li class='active'><a href='fr_index.php'>Function Room</a></li>
        <li><a href='avr1_index.php'>Audio Visual Room 1</a></li>
        <li><a href='avr2_index.php'>Audio Visual Room 2</a></li>
        <li><a href='dlp'>DLP Reservation</a></li>
      </ul>
      </div>  

      <div id="calendar_div">
      <?php echo get_calender_full(); ?>
      </div>

       </div>
      </div>
  



  </div>
  </body>
</html>
