<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- all other head elements after this point -->
        <!-- page is built on Bootstrap 4 -->
        <title>Web Historians - who we are</title>

        <!--Stylesheet-->

        <link href="SASS/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">


        <!--Google Fonts-->
        <link href='https://fonts.googleapis.com/css?family=Roboto:300italic,300,500,500italic' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Inconsolata' rel='stylesheet' type='text/css'>
      
      <!-- web fonts for header -->
    <link href="css/webfont-stylesheet.css" rel="stylesheet">    
    
    <link rel='stylesheet prefetch' href='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css'>


 <!-- Font AWESOME -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

        <!-- Angular JS -->
        <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.3.5/angular.min.js"></script>     
        
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
                        <a class="nav-link" href="my_restorations.php">My Restorations</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="gettingstarted.php">Getting started</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="help.php">Help</a>
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
      
      
        <!--breadcrumbs for pages NOT HOMEPAGE index.html
        <div class="container">
        <ol class="breadcrumb">
        <li class="active">Gallery</li>
        </ol>
        <div class="breadcrumb-container">
            <ol class="breadcrumb">
                <li><a href="gettingstarted.html">About</a></li>
                <li class="active">Help</li>
            </ol>
        </div>-->
        
        <!-- Getting started container -->
        <div class="container">
    
            <h1>Help</h1>
            <br />
            <p>
                There are lots of places to get help with HTML and CSS on the web.  A good place to start is the <a class="help-links" href="http://www.w3schools.com/">w3schools</a>.  They helpful lists of <a class="help-links" href="http://www.w3schools.com/tags/">HTML tags</a> (including which ones are new) and <a class="help-links" href="http://www.w3schools.com/html/html_tables.asp">HTML Tables</a> (which is helpful as a lot of old websties use these a lot).  Sites like <a class="help-links" href="http://htmldog.com/reference/htmltags/">HTML Dog</a> and <a class="help-links" href="https://css-tricks.com/">CSS-Tricks</a> are also a great resource.
            </p>
            <p>
                Have a specific question?  Try searching or asking on <a class="help-links" href="http://stackoverflow.com/tour">Stack Overflow</a>. Stack Overflow is a question and answer site that can help beginners like you.  
            </p>

          
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