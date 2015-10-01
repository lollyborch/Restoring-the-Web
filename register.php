<!-- PHP code snippets taken from http://code.tutsplus.com/tutorials/user-membership-with-php--net-1523 -->
<?php require "base.php"; ?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf=8" />
<title>User Management System</title>
</head>
<body>
<h1>This is a test</h1>
	<div id="main">
	<?php 
	error_reporting(E_ALL); 
	ini_set('display_errors',1);
	
	if(!empty($_POST['username']) && !empty($_POST['password'])) 
	{
		$username = mysql_real_escape_string($_POST['username']);
		$password = mysql_real_escape_string($_POST['password']);
		$email = mysql_real_escape_string($_POST['email']);
		
		$checkusername = mysql_query("SELECT * FROM users WHERE Username = '".$username."'");
		
		if(mysql_num_rows($checkusername) == 1) 
		{
			echo "<h1>Error</h1>";
			echo '<p>Sorry, that Username is taken. Please <a href="register.php">go back</a> and try again.</p>';
		}
		else 
		{
			$registerquery = mysql_query("INSERT INTO users (Username, Password, EmailAddress) VALUES ('".$username."', '".$password."', '".$email."')");
			if ($registerquery) 
			{
				echo "<h1>Success</h1>";
				echo '<p>Your account was successfully created. Please <a href="index.php">Click here to log in</a>.</p>';
			}
			else
			{
            echo "<h1>Error</h1>";
            echo '<p>Sorry, your registration failed. Please <a href="register.php">go back</a> and try again.</p>';    
			} 
		}
	}
	else {
	
		echo '
			<h1>Registration</h1>
			<p>Please enter your details below to register.</p>
			
			<form method="POST" action="register.php" name="registerform" id="registerform">
			<fieldset>
				<label for="username">Username:</label>
					<input type="text" name="username" id="username" /><br />
				<label for="password">Password:</label>
					<input type="password" name="password" id="password" /><br />
				<label for="email">Email Address:</label>
					<input type="text" name="email" id="email" /><br />
				<input type="submit" name="register" id="register" value="Register" />
			</fieldset>
			</form>
			';
		}
	?>
	</div>
</body>
</html>