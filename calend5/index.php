<?php 
echo dirname(_FILE_);
echo '<br/>' . getcwd();
echo $_SERVER['DOCUMENT_ROOT'];
error_reporting(E_ALL);
include_once('functions.php'); ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Event Calendar By Spaceo Technologies</title>
<link type="text/css" rel="stylesheet" href="style.css"/>
<script src="jquery.min.js"></script>
</head>
<body>

<div id="calendar_div">
	<?php
	error_reporting(E_ALL);
	echo get_calender_full(); 
	?>
</div>
</body>
</html>
