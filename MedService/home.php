<?php
session_start();
if (!isset($_SESSION['login_user'])) {
  header("Location: index.php");
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
       <p>An Application that helps you check the vacancies of Multimedia Rooms.</p>
       <p>Scroll down the page to see the result.</p>
       <p>Some text to enable scrolling.. Lorem ipsum dolor sit amet, illum definitiones no quo, maluisset concludaturque et eum, altera fabulas ut quo. Atqui causae gloriatur ius te, id agam omnis evertitur eum. Affert laboramus repudiandae nec et. Inciderint efficiantur his ad. Eum no molestiae voluptatibus.</p>
       <p>Some text to enable scrolling.. Lorem ipsum dolor sit amet, illum definitiones no quo, maluisset concludaturque et eum, altera fabulas ut quo. Atqui causae gloriatur ius te, id agam omnis evertitur eum. Affert laboramus repudiandae nec et. Inciderint efficiantur his ad. Eum no molestiae voluptatibus.</p>
       <p>Some text to enable scrolling.. Lorem ipsum dolor sit amet, illum definitiones no quo, maluisset concludaturque et eum, altera fabulas ut quo. Atqui causae gloriatur ius te, id agam omnis evertitur eum. Affert laboramus repudiandae nec et. Inciderint efficiantur his ad. Eum no molestiae voluptatibus.</p>
       <p>Some text to enable scrolling.. Lorem ipsum dolor sit amet, illum definitiones no quo, maluisset concludaturque et eum, altera fabulas ut quo. Atqui causae gloriatur ius te, id agam omnis evertitur eum. Affert laboramus repudiandae nec et. Inciderint efficiantur his ad. Eum no molestiae voluptatibus.</p>
      </div>
      </div>





  </div>
  </body>
</html>
