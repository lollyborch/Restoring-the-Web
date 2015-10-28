<!-- PHP code snippets taken from http://code.tutsplus.com/tutorials/user-membership-with-php--net-1523 -->
<?php require("base.php"); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- page is built on Bootstrap 4 -->
        <title>Web Historians</title>

        <!--Stylesheets-->

        <!--Bootstrap 4 styles generated with SASS by grunt.js-->
        <link href="SASS/dist/css/bootstrap.min.css" rel="stylesheet">

        <!--Web Historians style sheet including login CSS from http://bootsnipp.com/snippets/featured/responsive-login-with-social-buttons-->
        <link href="css/style.css" rel="stylesheet">

        <!--Fonts-->
        <!--Google Fonts - Roboto -->
        <link href='https://fonts.googleapis.com/css?family=Roboto:300italic,300,500,500italic' rel='stylesheet' type='text/css'>

        <!-- FFF Tusj font from http://www.fontsquirrel.com/fonts/fff-tusj -->
        <link href="css/webfont-stylesheet.css" rel="stylesheet">

        <!-- Font AWESOME for icons https://fortawesome.github.io/Font-Awesome/-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    </head>
<body>
<?php

if(!empty($_SESSION["loggedIn"]) && !empty($_SESSION["username"])){
  header('Location: http://deco1800-g49.uqcloud.net/my_restorations.php');
	?>

<?php
//$connection = mysql_connect("localhost", "Felixlinh", "155764") or die("MySQL Error: " . mysql_error());
//$database = mysql_select_db("users",$connection) or die("MySQL Error: " . mysql_error());
}
elseif(!empty($_POST["username"]) && !empty($_POST["password"]))
{
	$username = mysql_real_escape_string($_POST["username"]);
    //change to $password = md5(mysql_real_escape_string($_POST["password"])); to ENCRYPT LATER
	$password = mysql_real_escape_string($_POST["password"]);

	$checklogin = mysql_query('SELECT * FROM users WHERE username ="'.$username.'" AND password ="'.$password.'";');
	//$checklogin = mysqli_query($con,'SELECT * FROM users WHERE username ="'.$username.'" AND password ="'.$password.'";');

	if(mysql_num_rows($checklogin) == '1'){
		$row = mysql_fetch_array($checklogin);
		$email = $row["emailAddress"];

		$_SESSION['username'] = $username;
		$_SESSION['emailAddress'] = $email;
		$_SESSION['loggedIn'] = 1;
		header('Location: http://deco1800-g49.uqcloud.net/home.php');
	}
	else {
		echo "<h1>Error</h1>";
		echo "<p>Sorry, your account cannot be found. Please <a href=\index.php#login> Click here to try again</a>.</p>";
		echo $username;
		echo $password;
	}
}
else {
	?>
	      <!--header start-->
        <header class="header">
            <div class="header-container">

            <!-- NAVBAR adapted from http://getbootstrap.com/components/#navbar-->
            <nav class="navbar navbar-dark navbar-static-top">
                <a class="navbar-brand brand-heading" href="home.php">web historians</a>
                <ul class="nav navbar-nav pull-right">
                    <li class="nav-item">
                    <!--add nav-active to current page-->
                        <a class="nav-link " href="index.php#login">Log in</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="register.php#login">Sign up</a>
                    </li>
                </ul>
            </nav>
            </div>
        </header>
        <!--header end-->


    <!-- Getting started container -->
<div class="container">
    <h1>
    <img class="img-responsive" src="images/Home_Infographic.png" alt="Home Page Instruction" width="100%"/>
    </h1>
    <br />
        <h2 id="login" class="text-center">Register or log in below to find out more.</h2>
        <br />

        <!--login adpated from http://bootsnipp.com/snippets/featured/responsive-login-with-social-buttons -->
        <div class="omb_login row">
			<div class="col-md-6 col-md-offset-3 login-container" >
			<h3 class="omb_authTitle row">Log in or <a href="register.php#login">Sign up</a></h3>
				<div class="row">
					<form name="loginform" method="POST" action="index.php" id="loginform" class="omb_loginForm col-xs-12">
						  <div class="input-group">
							<label class="input-group-addon">
								<i class="fa fa-user fa-icon-fixed"></i>
							</label>
							<input type="text" class="form-control" id="username" name="username" placeholder="username" />
						  </div>
					  <span class="help-block"></span>
						 <div class="input-group">
							<label class="input-group-addon">
								<i class="fa fa-lock fa-icon-fixed"></i>
							</label>
							<input  type="password" id="password" class="form-control" name="password" placeholder="password" />
						 </div>
					<span class="help-block" style="visibility:hidden">Password error</span>
					<button class="btn btn-lg btn-primary btn-block" name="login" id="login" type="submit">Log in</button>
					</form>
				</div>
		</div>
    </div>
</div>
      <!-- footer -->
        <div class="container">
          <div class="otherrow">
            <div class="greencolour">
                <p class="small">&copy; Restoring the web</p>
              </div>
          </div>
        </div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="SASS/dist/js/bootstrap.min.js"></script>



	<?php
}
?>
</body>
</html>
