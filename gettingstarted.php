<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- page is built on Bootstrap 4 -->
        <title>Web Historians - getting started</title>

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
                        <a class="nav-link active" href="gettingstarted.php">Getting started</a>
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
        </ol>
        <div class="breadcrumb-container">
            <ol class="breadcrumb">
                <li><a href="gettingstarted.html">About</a></li>
                <li class="active">Getting started</li>
            </ol>
        </div>-->
        
        <!-- Getting started container -->
        <div class="container">
            <h1>Getting started</h1>
            <br />
            <img class="img-responsive" src="images/Home_Infographic.png" alt="Home Page Instruction" width="100%" />
            <br />
            <p>When you choose a website to restore, you will be directed to a working page.</p>   
            <h2>Working Panel</h2>
            <p>Here is an example of the Working Panel for Module 1 of Cricket Australia</p>
            <img class="img-responsive" src="images/working_panel.png" alt="Home Page Instruction" width="100%" />
            <br />
            <div class="row">
                <div class="col-md-12">
                    <h2>Errors</h2> 
                    <p>The errors panel lists the errors returned by the HTML validator.  As you fix the errors, you can re-validate your code using the <strong>Validate</strong> button.  Need help understanding what errors mean?  Try our <strong>Help</strong> link. </p>  
                    <h2>HTML Editor</h2> 
                <p>Edit the HTML code for your module here. This box is responsive so you will see the <strong>Preview</strong> pane update as you type.</p>
                </div>
            </div>
                    
            <div class="row">
                <div class="col-md-6">
                    <h2>CSS Editor</h2> 
                    <p>Add your CSS styles in this box, it works in a similar way to the HTML Editor. When you start a new website, the CSS Editor box will be blank.  As you progress through the modules, the CSS you create will be saved between each one for you to build upon. Make sure you add the CSS between the style tags.</p>
                    <h2>Saving and completing a module</h2> 
                    <p>To save your progress, clickthe <strong>Save</strong> button at the bottom of the page.</p>
                    <p>Fixed all your errors? Congratulations! You can choose to move to the next module or start a new website.</p>
                </div>
                <div class="col-md-6">
                    <h2>CSS Editor Panel and Save</h2>
                    <img class="img-responsive" src="images/css_panel.png" alt="Home Page Instruction" width="100%" />
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
  </body>
</html>