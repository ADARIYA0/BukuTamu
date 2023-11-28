<?php
// config.php
$dbhost = 'localhost';
$dbuser = 'id21549242_dabu';
$dbpass = 'Welcome_123';
$dbname = 'id21549242_databasebukutamu';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass) or die('Error connecting to mysql');
mysqli_select_db($conn, $dbname);
?>