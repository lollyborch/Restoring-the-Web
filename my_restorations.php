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

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
      
    <!-- Angular JS -->
    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.3.5/angular.min.js"></script>
   <!-- <script src="js/active.js"></script>-->
      
      
  </head>
  <body ng-app="myApp">
      
    <!--header start-->
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
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="gettingstarted.html" role="button" aria-haspopup="true" aria-expanded="false">About</a>
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
        </ol>
        
        <ol class="breadcrumb">
          <li><a href="#">About</a></li>
          <li class="active">Getting started</li>
        </ol>
      
      </div>-->
      
            <!-- Gallery starts-->
      
      <div class="container">
          <div class="otherrow">
                <h1>My Restorations</h1>
                <br />
                <article class="col-xs-12 col-sm-6 col-md-4">
                    <a href="working_panel.html" class="zoom">
                        <!-- Sneaky in-line style for the demo -->
                        <img src="images/cricket.png" alt="Cricket Australia" style="height:189px; width:100%;"/></a>
                    <progress class="progress" value="83" max="137">
                            <!--the div is for IE9 support-->
                            <div class="progress">
                            <span class="progress-bar" style="width: 25%;">25%</span>
                            </div>
                        </progress>
                        <p class="progress-text text-right">83/137 Errors fixed</p>
              </article>
              <article class="col-xs-12 col-sm-6 col-md-4">
                    <a href="images/my_res2.jpg" class="zoom" data-toggle="modal" data-target="#Gallerytwo">
                                <img src="images/my_res2.jpg" alt="Gallery 1" />
                            </a>
                  <progress class="progress" value="100" max="100">
                            <!--the div is for IE9 support-->
                            <div class="progress">
                            <span class="progress-bar" style="width: 25%;">25%</span>
                            </div>
                        </progress>
                  <p class="progress-text text-right">All errors fixed</p>
              </article>
              <article class="col-xs-12 col-sm-6 col-md-4">
                    <a href="images/my_res1.jpg" class="zoom" data-toggle="modal" data-target="#Gallerythree">
                                <img src="images/my_res1.jpg" alt="Gallery 1" />
                            </a>
                  <progress class="progress" value="100" max="100">
                            <!--the div is for IE9 support-->
                            <div class="progress">
                            <span class="progress-bar" style="width: 25%;">25%</span>
                            </div>
                        </progress>
                  <p class="progress-text text-right">All errors fixed</p>
              </article>
              
<!-- Gallery modal content starts-->
              <!-- Gallery Modal 1 
            <div class="modal fade" id="cricketaus" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Website title</h4>
                  </div>
                  <div class="modal-body">
                    <img src="images/cricket.png" alt="Gallery 1" />
                  </div>
                  <div class="modal-footer">
                    <h4>Editors Name</h4>
                  </div>
                </div>
              </div>
            </div>-->
              <!-- End Modal1 -->
              <!-- Gallery Modal 2 -->
            <div class="modal fade" id="Gallerytwo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Website title</h4>
                  </div>
                  <div class="modal-body">
                    <img src="images/my_res2.jpg" alt="Gallery 1" />
                  </div>
                  <div class="modal-footer">
                    <h4>Editors Name</h4>
                  </div>
                </div>
              </div>
            </div>
              <!-- End Modal2 -->
              <!-- Gallery Modal 3 -->
            <div class="modal fade" id="Gallerythree" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Website title</h4>
                  </div>
                  <div class="modal-body">
                    <img src="images/my_res1.jpg" alt="Gallery 1" />
                  </div>
                  <div class="modal-footer">
                    <h4>Editors Name</h4>
                  </div>
                </div>
              </div>
            </div>
              <!-- End Modal3 -->

          </div>
      
      </div>    
        
      <!-- Gallery ends-->      
      <!-- Gallery modal content ends-->


      
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
      
  </body>
</html>