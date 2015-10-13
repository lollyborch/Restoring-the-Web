<?php 
require("base.php"); 
require("php/save.php");
?>
<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Working Panel</title>

    <!--Stylesheet-->

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
    
    
    <link rel='stylesheet prefetch' href='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css'>
    <link rel='stylesheet prefetch' href='http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/css/font-awesome.css'>
    


  </head>
  <body>
  <!-- Fetching the Users Restoration HTML and CSS -->
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
	echo $_SESSION['username'];
	$UsersRestoration = mysql_query('SELECT RestoredHTML FROM `restorations` WHERE WebsiteID="1" and UserID="' .$currentUserID .'" and CompID="1";');
	$UsersRestorationsTable = mysql_fetch_array($UsersRestoration);
	$_SESSION['userHTML'] = $UsersRestorationsTable[0];
	$uHTML = $_SESSION['userHTML'];
	?>
	<div id="hiddenHTML" style="display:none"><?php echo $uHTML; ?></div>
      <!--header start-->
        <header class="header">
            <div class="header-container">

            <!-- NAVBAR adapted from http://getbootstrap.com/components/#navbar-->
            <nav class="navbar navbar-dark navbar-static-top">
                <a class="navbar-brand brand-heading" href="home.html">web historians</a>   
                <ul class="nav navbar-nav">
                    <li class="nav-item">
                    <!--add nav-active to current page-->
                        <a class="nav-link " href="home.html">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-active active" href="my_restorations.html">My Restorations</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="gallery.html">Gallery</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle " data-toggle="dropdown" href="gettingstarted.html" role="button" aria-haspopup="true" aria-expanded="false">About</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="gettingstarted.html">Getting started</a>
                            <a class="dropdown-item" href="help.html">Help</a>
                            <a class="dropdown-item" href="whoweare.html">Who we are</a>
                        </div>
                    </li>
                    
                </ul>
                <img class="nav-profilepic" src="profile/profilepic.jpg"/>
                <ul class="nav navbar-nav pull-right">
                    <li class="nav-item dropdown"> 
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="profile.html" role="button" aria-haspopup="true" aria-expanded="false">Account</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="profile.html">Profile</a>
                            <a class="dropdown-item" href="index.php" onclick='<?php unset($_SESSION["username"],$_SESSION["emailAddress"]);?>'>Log out</a>
                        </div>
                    </li>
                </ul>
            </nav>
            </div>
        </header>
        <!--header end-->
      
      <!--breadcrumbs for pages NOT HOMEPAGE index.html
        <div class="container">
        <ol class="breadcrumb">
        <li class="active">Gallery</li>
        </ol>-->
        <div class="breadcrumb-container">
            <ol class="breadcrumb">
                <li><a href="my_restorations.html">My Restorations</a></li>
                <li class="active">Working panel</li>
            </ol>
        </div>
      
      
    <div class="container">  
      
        <div class="clearfix">
            <div class="working-header pull-left">Errors</div>
            <div class="working-header pull-right">Preview</div>
        </div>
        <div class="item-container">
            <div id="validator" class="validator-section"><textarea style="font-weight:300" rows="9" cols="82" class="col-md-12"></textarea><button onclick="printErrors()">Validate</button></div>
            <iframe id="preview" class="preview-section"></iframe>
        </div>  
        <div class="clearfix">
            <div class="working-header pull-left" id="html-editor">Html Editor</div>
        </div>
        <div class="news-item-container">
            <div id="editor" class="preview-section"</div>
        </div>

        <div id="css-editor" class="clearfix">
            <div class="working-header pull-left"> CSS Editor</div>
        </div>
        <div class="item-container">
            <div id="csseditor" class="css-section">
            </div>
        </div>

            <a id="saveButton" class="btn btn-lg btn-primary " role="button">Save</a>
            <a class="btn btn-lg btn-primary text-center" href="my_restorations.html" role="button">Publish</a>
            <a class="btn btn-lg btn-primary text-center" href="help.html" role="button" target="_blank">Help</a>    
    </div>  

<!-- footer -->
        <div class="container">
          <div class="otherrow">
            <a href="whoweare.html" class="small">&copy; Restoring the web</a>
          </div>
        </div>
      




    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/ace/1.1.3/ace.js'></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://cdn.rawgit.com/twbs/bootstrap/v4-dev/dist/js/bootstrap.js"></script>
    <script src="SASS/dist/js/bootstrap.min.js"></script>

        <script src="SASS/dist/js/bootstrap.min.js"></script>
		<!-- This script sets up the Editor -->
        <script src="js/index.js">
		</script>

		<!-- This script adds content to the ditor -->
		<script src="js/cricket.js">
			printErrors();
		</script>
  </body>
</html>
