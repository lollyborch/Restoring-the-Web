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
      
      
    <!--Google Fonts-->
    <link href='https://fonts.googleapis.com/css?family=Roboto:300italic,300,500,500italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Inconsolata' rel='stylesheet' type='text/css'>
    
      <!-- web fonts for header -->
    <link href="css/webfont-stylesheet.css" rel="stylesheet">

   
     
    
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
                        <a class="nav-link active" href="home.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="my_restorations.php">My Restorations</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle nav-active " data-toggle="dropdown" href="gettingstarted.php" role="button" aria-haspopup="true" aria-expanded="false">About</a>
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
        
        <!-- Getting started container -->
        <div class="container">
                <h1>
                <img class="img-responsive" src="images/Home_Infographic.png" alt="Home Page Instruction" width="100%"/>
                </h1>
                <br />
                <p>To find out more about Web Historians, view <a href="gettingstarted.html">Getting started</a></p>   
        </div> 

      
      <!-- categories -->
      <div class="container" id="categories">
          <h2 id="categorieslink">Choose a category</h2>   
          <br />
          <div class="otherrow activerow" >
              <ul class="nav nav-tabs" role="tablist" id="myTab">
                  <li class="nav-item">
                      <!--to add or change a category need to change href= and aria controls as well -->
                    <a class="nav-link tabLarge active" href="#sport" role="tab" data-toggle="tab" aria-controls="sport">Sport</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link tabLarge" href="#arts" role="tab" data-toggle="tab" aria-controls="arts">Arts</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link tabLarge" href="#education" role="tab" data-toggle="tab" aria-controls="education">Education</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link tabLarge" href="#government" role="tab" data-toggle="tab" aria-controls="government">Government</a>
                  </li>
                </ul>
  
              
                <div class="tab-content" ng-controller="WebsiteController">
                  <div role="tabpanel" class="tab-pane active" id="sport">
                      <br />
                      <div class="row">
                          <div class="col-md-4" ng-repeat="sport in websiteSport">
                            
                            <h4 class="text-center">{{ sport.title }}</h4>
                             <figure class="cap-bot ">   
                                <img ng-src="{{ sport.coverImg }}" alt="{{ sport.imgalt }}" width="100%" class="img-responsive full-width-crop-200 sportimage alttext grey"/>   
                                <figcaption>
                                    <p class="categoryhover"><a ng-href="{{ sport.url }}">Begin restoration</a></p>
                                    <a class="easy-hard" ng-href="{{ sport.url }}"><img ng-src="{{ sport.level }}" alt="{{ sport.levelalt }}" class="img-responsive" /></a>
                                    
                                </figcaption>
                            </figure>
                          </div>
                      </div>
                    
                  </div>
                  <div role="tabpanel" class="tab-pane" id="arts">
                      <br />
                      <div class="row">
                          <div class="col-md-4" ng-repeat="art in websiteArts">
                            
                            <h4 class="text-center">{{ art.title }}</h4>
                             <figure class="cap-bot ">   
                                <img ng-src="{{ art.coverImg }}" alt="{{ art.imgalt }}" width="100%" class="img-responsive full-width-crop-200 artimage alttext grey"/>   
                                <figcaption>
                                    <p class="categoryhover"><a ng-href="{{ art.url }}">Begin restoration</a></p>
                                    <a class="easy-hard" ng-href="{{ art.url }}"><img ng-src="{{ art.level }}" alt="{{ art.levelalt }}" class="img-responsive" /></a>
                                    
                                </figcaption>
                            </figure>
                          </div>
                      </div>
          
                  </div>
                  <div role="tabpanel" class="tab-pane" id="education">
                     <!-- <img src="http://www.fillmurray.com/900/200" class="img-responsive full-width-crop-200"/>-->
                      <br />
                      <div class="row">
                          <div class="col-md-4" ng-repeat="edu in websiteEdu">
                            
                            <h4 class="text-center">{{ edu.title }}</h4>
                            <figure class="cap-bot ">   
                                <img ng-src="{{ edu.coverImg }}" alt="{{ edu.imgalt }}" width="100%" class="img-responsive full-width-crop-200 educationimage alttext grey"/>   
                                <figcaption>
                                    <p class="categoryhover"><a ng-href="{{ edu.url }}">Begin restoration</a></p>
                                    <a class="easy-hard" ng-href="{{ edu.url }}"><img ng-src="{{ edu.level }}" alt="{{ edu.levelalt }}" class="img-responsive" /></a>
                                    
                                </figcaption>
                            </figure>
                          </div>
                      </div>
                      
                  </div>
                  <div role="tabpanel" class="tab-pane" id="government">
                    <!--  <img src="https://placekitten.com/g/900/200" class="img-responsive full-width-crop-200"/>-->
                      <br />
                      <div class="row">
                          <div class="col-md-4" ng-repeat="gov in websiteGov">
                            
                            <h4 class="text-center">{{ gov.title }}</h4>
                            <figure class="cap-bot ">   
                                <img ng-src="{{ gov.coverImg }}" alt="{{ gov.imgalt }}" width="100%" class="img-responsive full-width-crop-200 governmentimage alttext grey"/>   
                                <figcaption>
                                    <p class="categoryhover"><a ng-href="{{ gov.url }}">Begin restoration</a></p>
                                    <a class="easy-hard" ng-href="{{ gov.url }}"><img ng-src="{{ gov.level }}" alt="{{ gov.levelalt }}" class="img-responsive" /></a>
                                    
                                </figcaption>
                            </figure>
                          </div>
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
    

    <!-- Angular JS -->
    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.3.5/angular.min.js"></script>
	
	<!--JQuery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    
    <!-- SASS Bootstrap -->
    <script src="SASS/dist/js/bootstrap.min.js"></script>

    <!-- Trove API image calls -->
    <script src="js/trove.js"></script> 

    <!-- Angular Controller-->
    <script src="js/WebsiteController.js"></script>  -->

    

  </body>
</html>