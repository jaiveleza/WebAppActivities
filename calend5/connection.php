<?php
// DATABASE CONNECTION STRING
//$ser_ver = 'sql3.freemysqlhosting.net';
//$user_name = 'sql3273664';
//$pass_word = 'KQbSlbH91h';
//$datab = 'sql3273664';

//define('localhost');
//define('root');
//define('rootadmin');
//define('event_calendar');

define('HOST', 'sql3.freemysqlhosting.net');
define('USERNAME', 'sql3273664');
define('PASSWORD', 'KQbSlbH91h');
define('DATABASE_NAME', 'sql3273664');

//Connect and select the database
$db = new mysqli(HOST, USERNAME, PASSWORD, DATABASE_NAME);

//$db = new mysqli($ser_ver, $user_name, $pass_word, $datab);
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
//$connection = mysql_connect($ser_ver, $user_name, $pass_word);
//$db = mysql_select_db($datab, $connection);




?>
