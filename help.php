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
    </head>
    <!-- End of Head -->
    
    <body ng-app="myApp">
      
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
                        <a class="nav-link" href="my_restorations.html">My Restorations</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="gallery.html">Gallery</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle nav-active active" data-toggle="dropdown" href="gettingstarted.html" role="button" aria-haspopup="true" aria-expanded="false">About</a>
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
                            <a class="dropdown-item" href="index.html">Log out</a>
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
                <li><a href="gettingstarted.html">About</a></li>
                <li class="active">Help</li>
            </ol>
        </div>
        
        <!-- Getting started container -->
        <div class="container">
    
            <h1>Help</h1>
            <p>If you need help, have a look at these resources...</p>
            
            <h2>What do you need help with?</h2>
            <div>
            <p>I need help with specific tags</p>
            <!--need to add glossary-->
            <a class="btn btn-primary-outline" href="#" role="button">View tag glossary</a>
            </div>
            <br />
            <div> 
            <p>I need specific help with Web Historians content</p>
            <a class="btn btn-primary-outline" href="https://groups.google.com/forum/#!forum/web-historiansl" role="button">Google Forum</a>&nbsp;<a class="btn btn-primary-outline" href="https://www.reddit.com/r/WebHistorians/" role="button">Reddit</a>
            </div>
            <br />
            <p>I need help with HTML or CSS</p>
            <a class="btn btn-primary-outline" href="http://stackoverflow.com/questions/tagged/html" role="button">Stack Overflow</a>

          
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