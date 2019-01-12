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
               <img src = "img/mslogo.png">
           </div>
             <ul>
                  <li><a href="home.php" >Home</a></li>
                  <li><a href="about.php"  class="active">About</a></li>

                  <li><a href="facilities.php">Facilities</a></li>
                  <li><a href="book.php">Contact</a></li>

                  <li class="log-out"><a href="logout.php">Logout</a></li>
             </ul>
       </nav>
     </div>


<!--
     <div class="main">


      <div class="row">
      <div class="box">
      <div class="bname">
      <a href="functionroom.php?rid=fr">FUNCTION ROOM</a>
      </div>
      </div>

      <div class="box">
      <div class="bname">
      <a href="functionroom.php?rid=avr1">AVR 1</a>
      </div>
      </div>
      </div>

      <div class="row">
      <div class="box">
      <div class="bname">
      <a href="functionroom.php?rid=avr2">AVR 2</a>
      </div>
      </div>

      <div class="box">
      <div class="bname">
      <a href="functionroom.php">DLP</a>
      </div>
      </div>
      </div>


   </div>
 
   -->
   <div class="main">
    <div id="main_home">


   


    </div>
   </div>




  </div>
  </body>
</html>

