<!-- PHP code snippets taken from http://code.tutsplus.com/tutorials/user-membership-with-php--net-1523 -->
<? php require "http://deco1800-g49.uqcloud.net/base.php"; ?>
<? session_start(); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- all other head elements after this point -->
    <!-- page is built on Bootstrap 4 -->
    <title>Web Historians</title>

	<!--Stylesheet
<link rel="stylesheet" href="css/style.css">
<link href="http://getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet">-->

      <link href="SASS/dist/css/bootstrap.min.css" rel="stylesheet">
      <link href="css/style.css" rel="stylesheet">
      
    <!--Google Fonts-->
    <link href='https://fonts.googleapis.com/css?family=Roboto:300italic,300,500,500italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Inconsolata' rel='stylesheet' type='text/css'>

      <!-- web fonts for header -->
    <link href="css/webfont-stylesheet.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
      
    <!-- Angular JS -->
    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.3.5/angular.min.js"></script>
   <!-- <script src="js/active.js"></script>-->
    
	<!-- Font AWESOME -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	
  </head>
<body>
<?php
$connection = mysql_connect("localhost", "Felixlinh", "155764") or die("MySQL Error: " . mysql_error());
$database = mysql_select_db("users",$connection) or die("MySQL Error: " . mysql_error());

if(!empty($_SESSION["loggedIn"]) && !empty($_SESSION["username"])){
	?>
	<h1>Member Area</h1>
	<p>Thanks for loggin in! You are <code><?=$_SESSION["username"]?></code> and your email address is <code><?=$_SESSION["emailAddress"]?></code>.</p>

<?php
$connection = mysql_connect("localhost", "Felixlinh", "155764") or die("MySQL Error: " . mysql_error());
$database = mysql_select_db("users",$connection) or die("MySQL Error: " . mysql_error());
}
elseif(!empty($_POST["username"]) && !empty($_POST["password"]))
{
	$username = mysql_real_escape_string($_POST["username"]);
	$password = mysql_real_escape_string($_POST["password"]);
	
	$checklogin = mysql_query('SELECT * FROM users WHERE username ="'.$username.'" AND password ="'.$password.'";');
	
	if(mysql_num_rows($checklogin) == '1'){
		$row = mysql_fetch_array($checklogin);
		$email = $row["emailAddress"];
		
		$_SESSION['username'] = $username;
		$_SESSION['emailAddress'] = $email;
		$_SESSION['loggedIn'] = 1;
		header('Location: http://deco1800-g49.uqcloud.net/home.html');
	}
	else {
		echo "<h1>Error</h1>";
		echo "<p>Sorry, your account cannot be found. Please <a href=\index.php> Click here to try again</a>.</p>";
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
                <a class="navbar-brand brand-heading" href="home.html">web historians</a>   
                
            </nav>
            </div>
        </header>
        <!--header end-->
      <!--breadcrumbs for pages NOT HOMEPAGE index.html
    <div class="container">
        <ol class="breadcrumb">
          <li class="active">Gallery</li>
        </ol>
        
        <ol class="breadcrumb">
          <li><a href="#">About</a></li>
          <li class="active">Getting started</li>
        </ol>
      
      </div>-->


    <!-- Getting started container -->
<div class="container">
    <h1>
    <img class="img-responsive" src="images/Home_Infographic.png" alt="Home Page Instruction" width="100%"/>
    </h1>
    <br />
        <p id="login">Register or log in below to find out more.</p>   
      
        <div class="omb_login row">
			<div class="col-md-6 col-md-offset-3 login-container" >
			<h3 class="omb_authTitle row">Log in or <a href="register.php">Sign up</a></h3>
				<div class="row"> 
					<form name="loginform" method="POST" action="index.php" id="loginform" class="omb_loginForm col-xs-12">
						  <div class="input-group">
							<label class="input-group-addon">
								<i class="fa fa-user"></i>
							</label>
							<input type="text" class="form-control" id="username" name="username" placeholder="username" />
						  </div>
					  <span class="help-block"></span>		
						 <div class="input-group">
							<label class="input-group-addon">
								<i class="fa fa-lock"></i>
							</label>
							<input  type="password" id="password" class="form-control" name="password" placeholder="password" />
						 </div>
					<span class="help-block" style="visibility:hidden">Password error</span>
					<button class="btn btn-lg btn-primary btn-block" name="login" id="login" type="submit">Log in</button>
					</form>
				</div>
			<div class="row" style="margin-top:5px">
			  <div class="col-xs-6">
				<label class="checkbox" style="margin-left:20px;">
				  <input type="checkbox" value="remember-me">Remember Me
				</label>
			  </div>
			  <div class="col-xs-6">
				<p class="omb_forgotPwd" style="margin:0;">
				  <a href="#">Forgot password?</a>
				</p>
			  </div>
			</div>
		
		</div>
    </div>
</div>     
      <!-- footer -->
        <div class="container">
          <div class="otherrow">
            <a href="whoweare.html" class="small">&copy; Restoring the web</a>
          </div>
        </div>
    

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="SASS/dist/js/bootstrap.min.js"></script>
      
    <!-- Angular Modules -->
    <script src="js/app.js"></script>

    <!-- Angular Controllers -->
    <script src="js/MainController.js"></script>
    <script src="js/WebsiteController.js"></script>    
    
    <!-- adapted from http://stackoverflow.com/questions/15645626/change-class-onclick-using-jquery -->  
    <script type="text/javascript">
        $('.btnactive').on('click', changeClass);
        console.log('click');

        function changeClass() {
           // $('.btnactive').toggleClass('active');
           $('.btnactive').removeClass('active');
            console.log('Remove class');
           $(this).addClass('active');
            console.log('add class');
        }
    </script>
      
     <!--change solid or outline button class for categories on click-->
      <script type="text/javascript">
        $(".btnactive:nth-child(1)").addClass('active');
          console.log('active');
      
    </script>
    
    <!--for tabs-->
    <script>
      $(function () {
        $('#myTab a:first').tab('show')
      })
    </script>
	<?php
}
?>
</body>
</html>