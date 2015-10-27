<!-- PHP code snippets taken from
http://us1.php.net/manual/en/function.mysqli-connect.php
http://code.tutsplus.com/tutorials/user-membership-with-php--net-1523 -->
<?php
// This Function creates a PHP session to store variables in.
session_start();

// These are the variables used to connect to the server database
$dbhost = "localhost";
$dbname = "users";
$dbuser = "Felixlinh";
$dbpass = "155764";

/*
The mysql_connect function takes all the db variables and makes a connection to the server
The or die part will produce an error in the PHP log if the connection fails
*/
$connection = mysql_connect("localhost", "Felixlinh", "155764") or die("MySQL Error: " . mysql_error());

/*
This selects the Database we want to connect to on the server
Again or die produces an error for debugging
*/
$database = mysql_select_db("users",$connection) or die("MySQL Error: " . mysql_error());
?>
