<?php
// DATABASE CONNECTION STRING
$ser_ver = "localhost";
$user_name = "root";
$pass_word = "rootadmin";
$datab = "event_calendar";

//define('localhost');
//define('root');
//define('rootadmin');
//define('event_calendar');

//define('HOST', 'localhost');
//define('USERNAME', 'root');
//define('PASSWORD', 'rootadmin');
//define('DATABASE_NAME', 'event_calendar');

//Connect and select the database
//$db = new mysqli(HOST, USERNAME, PASSWORD, DATABASE_NAME);

$db = new mysqli($ser_ver, $user_name, $pass_word, $datab);


if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}

//$connection = mysql_connect($ser_ver, $user_name, $pass_word);
//$db = mysql_select_db($datab, $connection);




?>