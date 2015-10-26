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
	echo $currentUserID;
    
    //Hard coded User ID
    $currentUserID1 = 19;

    /* variables that query the mySQL database to see if there is an entry for a particular module */
    $cricket_start_mysql = mysql_query("SELECT * FROM restorations WHERE WebsiteID = '1' AND UserID = $currentUserID1 ");
    $cricket_start_mysql2 = mysql_query("SELECT * FROM restorations WHERE WebsiteID = '1'");
    $olympics_start_mysql = mysql_query("SELECT * FROM restorations WHERE WebsiteID = '2' AND UserID = $currentUserID ");
    $cycling_start_mysql = mysql_query("SELECT * FROM restorations WHERE WebsiteID = '4' AND UserID = $currentUserID ");
    $ballet_start_mysql = mysql_query("SELECT * FROM restorations WHERE WebsiteID = '5' AND UserID = $currentUserID ");
    $writers_start_mysql = mysql_query("SELECT * FROM restorations WHERE WebsiteID = '6' AND UserID = $currentUserID ");
    $uq_start_mysql = mysql_query("SELECT * FROM restorations WHERE WebsiteID = '7' AND UserID = $currentUserID ");
    $qtac_start_mysql = mysql_query("SELECT * FROM restorations WHERE WebsiteID = '8' AND UserID = $currentUserID ");
    $council_start_mysql = mysql_query("SELECT * FROM restorations WHERE WebsiteID = '9' AND UserID = $currentUserID ");
    $gallery_start_mysql = mysql_query("SELECT * FROM restorations WHERE WebsiteID = '10' AND UserID = $currentUserID ");
    $museum_start_mysql = mysql_query("SELECT * FROM restorations WHERE WebsiteID = '11' AND UserID = $currentUserID ");

    $cricket_start = mysql_num_rows($cricket_start_mysql);
    $cricket_start2 = mysql_num_rows($cricket_start_mysql2);
    $olympics_start = mysql_num_rows($olympics_start_mysql);
    $cycling_start = mysql_num_rows($cycling_start_mysql);
    $ballet_start = mysql_num_rows($ballet_start_mysql);
    $writers_start = mysql_num_rows($writers_start_mysql);
    $uq_start = mysql_num_rows($uq_start_mysql);
    $qtac_start = mysql_num_rows($qtac_start_mysql);
    $council_start = mysql_num_rows($council_start_mysql);
    $gallery_start = mysql_num_rows($gallery_start_mysql);
    $museum_start = mysql_num_rows($museum_start_mysql);

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- page is built on Bootstrap 4 -->
        <title>Web Historians - my restorations</title>

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

        <!-- Angular JS + jQuery + divController -->
        <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.3.5/angular.min.js"></script>
        <script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
        <script src="js/divController.js"></script>

        <!-- converting php variables to js -->
        <script>
          var cricket = <?php echo (json_encode($cricket_start)); ?>;
          console.log("cricket var " + cricket);
          var cricket2 = <?php echo (json_encode($cricket_start2)); ?>;
          console.log("cricket2 var " + cricket2);
            
            var currentuserid1 = <?php echo (json_encode($currentUserID)); ?>;
          console.log("current user id is " + currentuserid1);
            
            var currentuser1 = <?php echo (json_encode($currentUser)); ?>;
          console.log("current user is " + currentuser1);
            
          var olympics = <?php echo (json_encode($olympics_start)); ?>;
          var cycling = <?php echo (json_encode($cycling_start)); ?>;
          var ballet = <?php echo (json_encode($ballet_start)); ?>;
          var writers = <?php echo (json_encode($writers_start)); ?>;
          var uq = <?php echo (json_encode($uq_start)); ?>;
          var qtac = <?php echo (json_encode($qtac_start)); ?>;
          var council = <?php echo (json_encode($council_start)); ?>;
          var gallery = <?php echo (json_encode($gallery_start)); ?>;
          var museum = <?php echo (json_encode($museum_start)); ?>;

        </script>
    
    </head>
    <!-- End of Head -->
    
    <body ng-app="myApp">
      
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
                        <a class="nav-link active" href="my_restorations.php">My Restorations</a>
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
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="profile.php" role="button" aria-haspopup="true" aria-expanded="false">Account</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="profile.php">Profile</a>
                            <a class="dropdown-item" href="index.php" onclick='<?php unset($_SESSION["username"],$_SESSION["emailAddress"]);?>'>Log out</a>
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
        
        <!-- main container starts-->
      
      <div class="container">
          <div class="otherrow">
                <h1>My Restorations</h1>
                <br />
              <p>Here are the modules you have started and completed.  To start a new restorations, <a href="home.php#categories">choose a website from the categories.</a></p>
             
          </div>
      
      </div>    
      <div ng-controller="divController">
          <div ng-repeat="div in divID">
              <div id="{{ div }}">
              <!--  {{ div }}-->
              </div>

          </div>
      </div>
   <script src="js/modules.js"></script>
        
      <!-- main container ends-->      
      
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