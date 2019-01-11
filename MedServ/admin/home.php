<?php
session_start();
if (!isset($_SESSION['login_user'])) {
  header("Location: home.php");
}
  $username=$_SESSION['login_user'];
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>MedServ</title>
    <link rel="stylesheet" href="content.css" type="text/css"/>
  </head>
  <body>
  <div class="container">

    <div class="navig">
	     <nav>
		       <div class="logo">
		           <img src = "img/Rlogo.png">
		       </div>
		         <ul>
			            <li><a href="home.php" class="active">Home</a></li>
			            

			            <li><a href="fr_index.php">Facilities</a></li>
			            <li><a href="contact.php">Contact</a></li>

			            <li class="log-out"><a href="logout.php">Logout</a></li>
		         </ul>
	     </nav>
     </div>

     <div class="shadow"></div>

     <div class="main">
      <div id="main_content">
       <h2>MEDSERV</h2>
       <p>An Application that helps you check the vacancies of Multimedia Rooms/Audio Visual Room, Function Room, Student Lounge, Moot Court and Conference Room.</p>
       <p>Interactive learning sessions are held in the audio visual room which is well equipped with a LCD Projector and a large screen, DVD players, sound system, chairs and other things that are helpful in an interactive learning. These two facility are located in the 8th floor of the UC-Banilad building and each has a seating capacity of two hundred (200) people </p>
       <p>A function room is made available for meetings, trainings, film showings, conferences and even birthday celebrations.  It is situated in the mezzanine floor and can accomodate approximately a hundred and fifty (150) people. </p>
       <p>The Student Lounge is a comfortable area open to students for gathering, studying, and relaxing between classes. The Lounge is equipped with tables and chairs,  TV, and a magazine swap table. One is available at the 2nd floor and another in the ground floor facing the basketball court. </p>
       <p>A Moot Court is also available at the 8th floor of UC-Banilad for law students, meetings and other activities that are applicable. </p>
       <p>A conference room, or meeting room is a room provided for singular events such as business conferences, meetings and disciplinary activities. </p>
      </div>
      </div>





  </div>
  </body>
</html>
