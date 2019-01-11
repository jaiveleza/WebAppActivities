<?php
//reservation
$firstname ="";
$lastname ="";
$address = "";
$contactnum ="";
$email = "";
//details
$venue= "";
$eventdate="";
$eventtime="";
$motif="";
$occasion="";
$numofpax ="";
$typeofserving="";
$package="";
//Payment
$packagedetails="";
$paymentdetails="";
$modeofpayment="";
//messageus
$fullname = "";
$emailadd = "";
$subject = "";
$comment = "";

$errorMessage="";
$errorMessageUs="";
//$error = array();

$num_rows=0;


function quote_smart($value, $handle) {

   if (get_magic_quotes_gpc()) {
       $value = stripslashes($value);
   }

   if (!is_numeric($value)) {
       $value = "'" . mysql_real_escape_string($value, $handle) . "'";
   }
   return $value;
}



//if(isset($_POST['submit'])){
//
//if(isset($_POST['submit'])){
if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['form1'])){

  switch($_REQUEST['name']){

    case 'Clear':
    break;

    //----------------------------------------------------------------------------------------------------------

    case 'Next':

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $address = $_POST['address'];
    $contactnum = $_POST['contactnum'];
    $email = $_POST['email'];

    $firstname = htmlspecialchars($firstname);
    $lastname = htmlspecialchars($lastname);
    $address = htmlspecialchars($address);
    $contactnum = htmlspecialchars($contactnum);
    $email = htmlspecialchars($email);

    if (empty($firstname) && empty($lastname) && empty($address) && empty($contactnum) && empty($email))
          {
            $errorMessage = $errorMessage."Fields are empty". "<BR>";
          }
          if(empty($firstname)){
            $errorMessage = $errorMessage."Please type your first name!". "<BR>";
          }
          if(empty($lastname)){
            $errorMessage = $errorMessage."Please type your last name!". "<BR>";
          }
          if(empty($address)){
            $errorMessage = $errorMessage."Please put your address!". "<BR>";
          }
          if(empty($contactnum)){
            $errorMessage = $errorMessage."Please put your password!". "<BR>";
          }
          if(empty($email)){
            $errorMessage = $errorMessage."Please put your email!". "<BR>";
          }

    if($errorMessage == ""){

      $connection = mysql_connect("sql3.freemysqlhosting.net", "sql3273664", "KQbSlbH91h");
      $db = mysql_select_db("sql3273664", $connection);

        if(!$db)
        {
        $errorMessage = "Database Not Found";
        }
        else
        {
        $SQL = "SELECT * FROM reservation_table WHERE `firstname`='".$firstname."' AND `lastname`='".$lastname."'";
        $result = mysql_query($SQL);
        $num_rows = mysql_num_rows($result);


          if($num_rows > 0)
          {
            $errorMessage = $errorMessage."User already taken"."<BR>";

            //header ("Location: contact.php");
          }

          else

          {

            $idc=0;
            $SQL1 = "SELECT * FROM reservation_table";
            $result1=mysql_query($SQL1);
            $num_rows2 = mysql_num_rows($result1);

            if($num_rows2 < 10){
              $idc = "2018"."00".$num_rows2;
            }
            if($num_rows2 >=10 && $num_rows < 100){
              $idc = "2018"."0".$num_rows2;
            }

            $SQL = "INSERT INTO reservation_table (`reservation_id`,`firstname`, `lastname`, `address`, `contactnum`, `email`)
                     VALUES ('".$idc."','".$firstname."', '".$lastname."', '".$address."', '".$contactnum."', '".$email."')";
            mysql_query($SQL);

            //
                  $mysql_close = ($db);

                  echo "<script type ='text/javascript'>alert(Successfully Registered!);</script>";
              //    if($success){
                  header("Location: details.php?idc=$idc");
                //  }
            }
        }



    }
    break;
//----------------------------------------------------------------------------------------------------------

    default:
    break;
    }
} //ending of POST

if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['form2'])){

  $fullname = $_POST['fullname'];
  $emailadd = $_POST['emailadd'];
  $subject = $_POST['subject'];
  $comment = $_POST['comment'];

  $fullname = mysql_real_escape_string($fullname);
  $emailadd = mysql_real_escape_string($emailadd);
  $subject = mysql_real_escape_string($subject);
  $comment = mysql_real_escape_string($comment);

  if(empty($fullname) && empty($emailadd) && empty($subject) && empty($comment)){
    $errorMessageUs = $errorMessageUs."Fields are empty."."<BR/>";
  }
  if(empty($fullname)){
    $errorMessageUs = $errorMessageUs."Please enter your name."."<BR/>";
  }
  if(empty($emailadd)){
    $errorMessageUs = $errorMessageUs."Please enter your email address."."<BR/>";
  }
  if(empty($subject)){
    $errorMessageUs = $errorMessageUs."Type in the subject."."<BR/>";
  }
  if(empty($comment)){
    $errorMessageUs = $errorMessageUs."Please feel free to share your thoughts."."<BR/>";

    }

  if($errorMessageUs == ""){

      $connection = mysql_connect("sql3.freemysqlhosting.net", "sql3273664", "KQbSlbH91h");
      $db = mysql_select_db("sql3273664", $connection);


    $sql = "INSERT INTO messageus (`user_id`, `fullname`, `email`, `subject`, `comment`)
            VALUES ('".$username."','".$fullname."','".$emailadd."','".$subject."','".$comment."')";
    mysql_query($sql);

    $mysql_close = ($db);
    echo    "<script>
            alert('Message Delivered!');
            window.location.href='contact.php';
            </script>";

  }


}






/*
*/
function call_messageus(){




}





function call_Reservation($firstname, $lastname, $address, $contactnum, $email){

    $SQL1 = "INSERT INTO  reservation (firstname, lastname, address, contactnum, email)
                     VALUES ($firstname, $lastname, $address, $contactnum, $email)";
    mysql_query($SQL1);


    return true;

}


?>

<script type='text/javascript'>
function show_error()
{
  alert("$errorMessage");
}

</script>
