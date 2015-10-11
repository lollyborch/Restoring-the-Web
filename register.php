<!-- PHP code snippets taken from http://code.tutsplus.com/tutorials/user-membership-with-php--net-1523 -->
<?php require "base.php"; ?>
<!DOCTYPE html>
<html>
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

 
    <!-- Getting started container -->
<div class="container">
                <h1>
                <img class="img-responsive" src="images/Home_Infographic.png" alt="Home Page Instruction" width="100%"/>
                </h1>
                <br />
        <p id="login">Register or log in below to find out more.</p>  
    
    <!-- START LOGIN BOX-->
        <div class="omb_login row">
			<div class="col-md-6 col-md-offset-3 login-container" >
			
                
                
    
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
			echo "<h3>Error</h3>";
			echo '<p>Sorry, that Username is taken. Please <a href="register.php#login">go back</a> and try again.</p>';
		}
		else 
		{
			$registerquery = mysql_query("INSERT INTO users (Username, Password, EmailAddress) VALUES ('".$username."', '".$password."', '".$email."')");
			if ($registerquery) 
			{
				echo "<h3>Success</h3>";
				echo '<p>Your account was successfully created. Please <a href="index.php#login">Click here to log in</a>.</p>';
			}
			else
			{
            echo "<h3>Error</h3>";
            echo '<p>Sorry, your registration failed. Please <a href="register.php#login">go back</a> and try again.</p>';    
			} 
		}
	}
	else {
	
		echo '
        <h3 class="omb_authTitle row"><a href="index.php">Log in</a> or Sign up</h3>
			<div class="row"> 
					<form name="registerform" method="POST" action="register.php#login" id="registerform" class="omb_loginForm col-xs-12">
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
                        <div class="input-group">
							<label class="input-group-addon">
								<i class="fa fa-envelope-o"></i>
							</label>
							<input  type="email" name="email" id="email" class="form-control" placeholder="email@email.com" />
						 </div>
					<button class="btn btn-lg btn-primary btn-block" name="register" id="register" type="submit">Register</button>
					</form>
				</div>
			';
		}
	?>
	</div>

				
		

		</div>
    </div>
<!-- END LOGIN BOX-->
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
      
    
</body>
</html>