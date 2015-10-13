<?php
session_start();

$dbhost = "localhost";
$dbname = "users";
$dbuser = "Felixlinh";
$dbpass = "155764";
 
$connection = mysql_connect("localhost", "Felixlinh", "155764") or die("MySQL Error: " . mysql_error());
$database = mysql_select_db("users",$connection) or die("MySQL Error: " . mysql_error());
?>
<?php 
	error_log("Something happened");
	$html = $_GET['data'];
	error_log($html);
	echo $html;
?>
