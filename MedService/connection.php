<?php
// DATABASE CONNECTION STRING
$ser_ver = "localhost";
$user_name = "root";
$pass_word = "rootadmin";
$datab = "medserv";

$db = new mysqli($ser_ver, $user_name, $pass_word, $datab);
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}


?>