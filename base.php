<!-- PHP code snippets taken from
http://us1.php.net/manual/en/function.mysqli-connect.php
http://code.tutsplus.com/tutorials/user-membership-with-php--net-1523 -->
<?php
session_start();

$dbhost = "localhost";
$dbname = "users";
$dbuser = "Felixlinh";
$dbpass = "155764";
 
$connection = mysql_connect("localhost", "Felixlinh", "155764") or die("MySQL Error: " . mysql_error());
/*$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
if (mysqli_connect_errno()) {
	echo "we did not manage to connect to the database" . mysqli_connect_error();
};*/
$database = mysql_select_db("users",$connection) or die("MySQL Error: " . mysql_error());

$checklogin = mysql_query("SELECT * FROM users WHERE username = 'j' AND password = 'j';");
$test = mysql_num_rows($checklogin);
$test2 = mysql_fetch_array($checklogin);
?>