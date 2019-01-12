<?php
session_start();
if (!isset($_SESSION['login_user'])) {
  header("Location: home.php");
}
  $username=$_SESSION['login_user'];

include_once 'messageus.php';

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
                  

                  <li><a href="fr_index.php">Facilities</a></li>
                  <li><a href="contact.php" class="active">Contact</a></li>

                  <li class="log-out"><a href="logout.php">Logout</a></li>
             </ul>
       </nav>
     </div>

     <div class="shadow"></div>

     <div class="main_contact_body">


      <div id="main_contact">
        
         <div id="main_messageus">
          <div id="header1_contactus">
          <h3>Message Us</h3>
          </div>
    
          <div class="errorspace"><p class = 'error'><?php print $errorMessageUs;?></p></div>

          <form action="contact.php" method="POST">
          <input type="text" name="fullname" placeholder="Full Name" value="<?php echo $fullname;?>"/>
          <input type="text" name="emailadd" placeholder="Email Address" value="<?php echo $emailadd;?>"/>
          <input type="text" name="subject" placeholder="Subject" value="<?php  echo $subject;?>"/>
          <textarea name="comment" rows="4" cols="50" placeholder="Comment"><?php echo $comment;?></textarea>
          <input type="submit" name="send" value="Send"/>
          <input type="hidden" name="form2" value="yes">

          </form>
        </div>






        <div id ="main_contactus">
        <div id="header2_contactus">
        <h3>Contact Us</h3>
        </div>
      
        <p><i class="fa fa-phone"></i>&nbsp;  Phone<strong>:</strong> 777-7777</p>
        
        <p><i class="fa fa-envelope"></i>&nbsp; Email<strong>:</strong> myemail@gmail.com</p>
        
        <p><i class="fa fa-home"></i>&nbsp; Address<strong>:</strong> Cebu City </p>
        
        <p><i class="fa fa-facebook"></i>&nbsp; Facebook<strong>:</strong> facebook.com/UCMedServ </p>
        
        </div>

       

      </div>

   

     </div>



  </div>
  </body>
</html>
