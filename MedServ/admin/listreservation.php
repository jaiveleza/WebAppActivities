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
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous">
  </script>
<script>
//$('#thenavigation li a').click(function() {
 //   $(this).closest("li").addClass('highlight').siblings().removeClass('highlight');
 //   return(false);   // no default behavior from clicking on the link
//});
</script>

  </head>
  <body>
  <div class="container">

    <div class="navig">
       <nav>
           <div class="logo">
               <img src = "img/Rlogo.png">
           </div>
             <ul>
                  <li class="higlight"><a href="home.php" >Home</a></li>
                  <li><a href="fr_index.php">Facilities</a></li>
                  <li><a href='listreservation.php?rid=fr'  class='active'>Reservations</a></li>
                  <li class="log-out"><a href="logout.php">Logout</a></li>
             </ul>
       </nav>
     </div>

     <div class="shadow"></div>

     <div class="r_contact">
      <div id="rc_body">

   
            <div id="cssmenu">
              <ul>
              <li class="active"><a href='listreservation.php?rid=fr'>Function Room</a></li>
              <li><a href='listreservation.php?rid=avr1'>Audio Visual Room 1</a></li>
              <li><a href='listreservation.php?rid=avr2'>Audio Visual Room 2</a></li>
              </ul>
            </div>  
                <!--
        <div id="myDIV">
        <button class="btn">1</button>
      <button class="btn active">2</button>
  <button class="btn">3</button>

    </div>
 -->
            <div id="main_contact">
    
            <?php
            $room_selector='';
            $ser_ver = "sql3.freemysqlhosting.net";
            $user_name = "sql3273664";
            $pass_word = "KQbSlbH91h";
            $data_base = "sql3273664";

            $db_handle = mysql_connect($ser_ver, $user_name, $pass_word);
            $db_found = mysql_select_db($data_base, $db_handle);

            $rid=$_GET['rid'];

            echo '<table id="listdown">'; 
            echo '<tr>';
            echo '<th></th><th>Title</th><th>Reservation Date</th><th>Status</th><th>Room Id</th><th></th><th></th>';
            echo '</tr>';

            $sql = "SELECT * FROM `events` WHERE room_id='".$rid."'";
            $query = mysql_query($sql);
            $idc=0;
            while($row=mysql_fetch_array($query)){
            $idc++;  
            $status_r = $row['status'];

            $status_book = ($status_r == 1) ? "RESERVED" : "BOOKED";
      
            echo '<tr>';
            echo '<td>'.$idc.'</td>'; 
            echo '<td>'.$row['title'].'</td>';
            echo '<td>'.$row['date'].'</td>';
            echo '<td id="rbstat">'.$status_book.'</td>';
            echo '<td>'.$row['room_id'].'</td>';
            echo'<td><a href="editbooking.php?id='.$row['id'].'">UPDATE</a></td>';

            echo'<td><a href="deleterow.php?id='.$row['id'].'">DROP</td>';



            echo '</tr>';
            }

            echo '</table>';



            ?>  
            </div>
        </div>      
     </div>
  </div>

<script>
// Add active class to the current button (highlight it)
var header = document.getElementById("myDIV");
var btns = header.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
</script>




  </body>
</html>
