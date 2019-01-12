<?php
// DATABASE CONNECTION STRING
$ser_ver = "sql3.freemysqlhosting.net";
$user_name = "sql3273664";
$pass_word = "KQbSlbH91h";
$datab = "sql3273664";

$db = new mysqli($ser_ver, $user_name, $pass_word, $datab);
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}


?>
