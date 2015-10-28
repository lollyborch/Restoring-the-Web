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

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Angular JS -->
        <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.3.5/angular.min.js"></script>     
        <!-- Font AWESOME -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
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
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle nav-active active" data-toggle="dropdown" href="gettingstarted.php" role="button" aria-haspopup="true" aria-expanded="false">About</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="gettingstarted.php">Getting started</a>
                            <a class="dropdown-item" href="whoweare.php">Who we are</a>
                        </div>
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
      
      
        <!--breadcrumbs for pages NOT HOMEPAGE index.html
        <div class="container">
        <ol class="breadcrumb">
        <li class="active">Gallery</li>
        </ol>-->
        <div class="breadcrumb-container">
            <ol class="breadcrumb">
                <li><a href="gettingstarted.html">About</a></li>
                <li class="active">Who we are</li>
            </ol>
        </div>
        
        <!-- Getting started container -->
        <div class="container">
            <h1>Who are we</h1>
            <p class="profiles"><img class="profilepic" src="profile/felix.jpg"/>Felix</p>
            <p class="profiles"><img class="profilepic" src="profile/lilly.jpg"/>Lilly</p>
            <p class="profiles"><img class="profilepic" src="profile/lyndon.jpg"/>Lyndon</p>
            <p class="profiles"><img class="profilepic" src="profile/rena.jpg"/>Rena</p>
            <p>description of our team, who we are, what we do</p>
            <br />

            <div>
                <a class="btn btn-primary-outline" href="testing.html" role="button">Link to HTML API</a>
                <a class="btn btn-primary-outline" href="mementoAPI.html" role="button">Link to the MementoAPI</a>
                <a class="btn btn-primary-outline" href="troveapi.html" role="button">Link to trove API</a>
                <a class="btn btn-primary-outline" href="html_editor.html" role="button">Link to HTML editor</a>
            </div>
            <br />
            <div>
                <a class="btn btn-lg btn-primary" href="#" role="button">Log in &raquo;</a>
                <a class="btn btn-lg btn-primary" href="#" role="button">Sign up &raquo;</a>
            </div>
            <br />
            <div>
                <a class="btn btn-danger-outline " href="index.html" role="button">index.html - Landing page</a>
                <a class="btn btn-danger-outline active" href="home.html" role="button">Home page</a>
                <a class="btn btn-danger-outline " href="index-fullwidth-square.html" role="button">Full width/image categorie</a>
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
  </body>
</html>