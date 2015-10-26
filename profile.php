<?php 
require("base.php"); 
?>
<?php
	// Grab the Website ID which is posted on the cricketaustralia.html module when pressed
	$getvalues = $_GET['WebsiteID'];
	$componentID = substr($getvalues,-1,1);
	$webIDvalue = substr($getvalues,0,1);
	// Grab the current users name
	$currentUser = $_SESSION["username"];
	
	// Find the userID from their name and email (email must be unique so this is ok)
	$currentUserRequest = mysql_query('SELECT UserID FROM users WHERE username="' . $_SESSION['username'] . '" and emailAddress="' . $_SESSION['emailAddress'] .'";');
	$currentUserIDTable = mysql_fetch_array($currentUserRequest);
	$currentUserID = $currentUserIDTable[0];
	//echo $currentUserID;
    $SessionUsername = $_SESSION['username'];
    $SessionEmail = $_SESSION['emailAddress'];
    //echo $_SESSION['username'];
    echo $SessionUsername;
    echo $SessionEmail;

	$UsersRestoration = mysql_query('SELECT RestoredHTML FROM `restorations` WHERE WebsiteID="1" and UserID="' .$currentUserID .'" and CompID="1";');
	$UsersRestorationsTable = mysql_fetch_array($UsersRestoration);
	$_SESSION['userHTML'] = $UsersRestorationsTable[0];
	$uHTML = $_SESSION['userHTML'];


?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- page is built on Bootstrap 4 -->
        <title>Web Historians - profile</title>

        <!--Stylesheets-->

        <!--Bootstrap 4 styles generated with SASS by grunt.js-->
        <link href="SASS/dist/css/bootstrap.min.css" rel="stylesheet">

        <!--Web Historians style sheet including login CSS from http://bootsnipp.com/snippets/featured/responsive-login-with-social-buttons-->
        <link href="css/style.css" rel="stylesheet">

        <!--Fonts--!>
        <!--Google Fonts - Roboto -->
        <link href='https://fonts.googleapis.com/css?family=Roboto:300italic,300,500,500italic' rel='stylesheet' type='text/css'>

        <!-- FFF Tusj font from http://www.fontsquirrel.com/fonts/fff-tusj -->
        <link href="css/webfont-stylesheet.css" rel="stylesheet">    

        <!-- Font AWESOME for icons https://fortawesome.github.io/Font-Awesome/-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css"> 

             
        
    </head>
    <!-- End of Head -->
    
    <body>
      
        <!--header start-->
        <header class="header">
            <div class="header-container">

            <!-- NAVBAR adapted from http://getbootstrap.com/components/#navbar-->
            <nav class="navbar navbar-dark navbar-static-top">
                <a class="navbar-brand brand-heading" href="home.php">web historians</a>   
                <ul class="nav navbar-nav">
                    <li class="nav-item">
                    <!--add nav-active to current page-->
                        <a class="nav-link " href="home.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="my_restorations.php">My Restorations</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="gettingstarted.php">Getting started</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="help.php">Help</a>
                    </li>
                    
                </ul>
                
                <ul class="nav navbar-nav pull-right">
                    <li class="nav-item dropdown"> 
                        <a class="nav-link dropdown-toggle active" data-toggle="dropdown" href="profile.php" role="button" aria-haspopup="true" aria-expanded="false">Account</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="profile.php">Profile</a>
                            <a class="dropdown-item" href="logout.php">Log out</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <i class="fa fa-user fa-account"></i>
                    
                    </li>
                </ul>
            </nav>
            </div>
        </header>
        <!--header end-->
      
      
        <!--breadcrumbs for pages NOT HOMEPAGE index.html

        <div class="breadcrumb-container">
            <ol class="breadcrumb">
                <li><a href="profile.php">Account</a></li>
                <li class="active">Profile</li>
            </ol>
        </div>
        
        <!-- Getting started container -->
        <div class="container">
            
            <h1>My Profile</h1>
            <br />
            <div class="row">
                <div class="col-lg-6">
                    <p id="uName">Name: <?php echo $SessionUsername; ?></p>
                    <p id="uEmail">Email: <?php echo $SessionEmail; ?> </p>
                         
                </div>
                <!-- Profile pic change is we get time
                <div class="col-lg-6">
                    <p>Profile picture:</p>
                    <img class="profilepic" src="profile/profilepic.jpg"/>
                </div>-->
            </div>

            <!-- Edit feature not supported <p><a class="btn btn-primary-outline" href="#" role="button">Edit profile</a></p> -->

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
  </body>
</html>