<?php 
require '../login/db.php';

$db_server = mysql_connect($host,$user,$pass,$db);

mysql_select_db($db, $db_server)
or die("Unable to select database: " . mysql_error());

$subject = ('subject');
$year = ('year');

$query1 = "SELECT subject FROM books";
$query2 = "SELECT year FROM books";
// Escape all $_POST variables to protect against SQL injections
?>
