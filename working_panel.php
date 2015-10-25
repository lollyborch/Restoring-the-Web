<?php 
require("base.php"); 
?>
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

<!DOCTYPE html>
<html >
    <head>
        <meta charset="UTF-8">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <!-- page is built on Bootstrap 4 -->
        <title>Web Historians - working panel</title>

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

        <!-- Joyride plugin from http://zurb.com/playground/jquery-joyride-feature-tour-plugin -->
        <link rel="stylesheet" href="joyride/joyride-2.1.css">

        <script>
            // converting php variables to javascript
            // gets website Id and module ID
            var WebsiteIDNumberString = <?php echo (json_encode($getvalues)); ?>;
            //uses index to just get the website ID
            var WebsiteIDNumber = WebsiteIDNumberString[0]

        </script>

  </head>
  <body>
  
	<div id="hiddenHTML" style="display:none"><?php echo $uHTML; ?></div>
      
          
      
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
      
  <div class="container-fluid">  
      
        <div class="clearfix">
            <div id="numero1" class="working-header pull-left">Errors</div>
            <div id="numero5" class="working-header pull-right">Preview</div>
        </div>
        <div class="item-container">
            <div id="validator" class="validator-section"><textarea style="font-weight:300" rows="9" cols="82" class="col-md-12"></textarea><button id="numero2" class="working-button" onclick="printErrors()">Validate</button><a href="http://deco1800-g49.uqcloud.net/help.php" id="numero3" class="working-help" onclick="positionedPopup(this.href,'myWindow','1000','450','100','200','yes');return false">Help</a></div>
            
            <iframe id="preview" class="preview-section"></iframe>
        </div>  
        <div class="clearfix">
            <div id="numero4" class="working-header pull-left" id="html-editor">HTML Editor</div>
        </div>
        <div class="news-item-container">
            <div id="editor" class="preview-section"></div>
        </div>

        <div id="css-editor" class="clearfix">
            <div id="numero6" class="working-header pull-left"> CSS Editor</div>
        </div>
        <div class="item-container">
            <div id="csseditor" class="css-section">
            </div>
        </div>

            <a id="saveButton" class="btn btn-lg btn-primary " role="button">Save</a>
            <!--<button onclick="ready" id="HistoryButton"  class="btn btn-lg btn-primary ">View history of this website</button>-->
            <a class="btn btn-lg btn-primary text-center" id="HistoryButton" href="" role="button" target="_blank">View history of this website</a>

        
    </div>        

  <div class="container">
          <div class="otherrow">
                <h1>Gallery</h1>
              <a class="btn btn-lg btn-primary text-center" data-toggle="modal" data-target="#HelpModal" role="button">Help Button </a>
              <a class="btn btn-lg btn-primary text-center" data-toggle="modal" data-target="#CongratsModal" role="button">Congratulations </a>
                <br />
           

          </div>

    <br><br>

  </div>
      <!-- Tip Content -->
    <ol id="joyRideTipContent">
      <li data-id="numero1" data-text="Next" >
        <h2>Step #1</h2>
        <p>View the errors returned by the HTML validator in the Errors panel.</p>
      </li>
      <li data-id="numero2" data-button="Next" data-options="tipLocation:top">
        <h2>Step #2</h2>
        <p>As you fix the errors, you can re-validate your code using the <strong>Validate</strong> button.</p>
      </li>
      <li data-id="numero3" data-button="Next" data-options="tipLocation:bottom">
        <h2>Step #3</h2>
        Need help understanding what errors mean?  Try our <strong>Help</strong> link.</p>
      </li>
      <li data-id="numero4" data-button="Next">
        <h2>Stop #4</h2>
        <p>Edit the HTML code for your module in the HTML Editor.</p>
      </li>
      <li data-id="numero5" data-button="Next" data-options="tipLocation:right">
        <h2>Step #5</h2>
        <p>The Preview box is responsive so you will see your changes in the HTML Editor and CSS Editor appear here.</p>
      </li>
      <li data-id="numero6" data-button="Next" data-options="tipLocation:right">
        <h2>Step #6</h2>
        <p>Add CSS styles in this box, it works in a similar way to the HTML Editor. When you start a new website, the CSS Editor box will be blank.  As you progress through the modules, the CSS you create will be saved between each one for you to build upon. Make sure you add the CSS between the style tags.</p>
      </li>
    <li data-id="saveButton" data-button="Close" data-options="tipLocation:right">
        <h2>Step #7</h2>
        <p>To save your progress, click the <strong>Save</strong> button. When you fix all the errors, a 'Congratulations' box will appear.</p>
      </li>
    </ol>
      
      <!-- footer -->
        <div class="container-fluid">
            <div class="container">
              <div class="otherrow">
               <div class="greencolour">
                <p class="small">&copy; Restoring the web</p>
              </div>
              </div>
            </div>
          </div>
      

        <!-- Help Modal 1 -->
            <div class="modal fade" id="HelpModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Help</h4>
                  </div>
                  <div class="modal-body">
                    <p>
                There are lots of places to get help with HTML and CSS on the web.  A good place to start is the <a class="help-links" href="http://www.w3schools.com/">w3schools</a>.  They helpful lists of <a class="help-links" href="http://www.w3schools.com/tags/">HTML tags</a> (including which ones are new) and <a class="help-links" href="http://www.w3schools.com/html/html_tables.asp">HTML Tables</a> (which is helpful as a lot of old websties use these a lot).  Sites like <a class="help-links" href="http://htmldog.com/reference/htmltags/">HTML Dog</a> and <a class="help-links" href="https://css-tricks.com/">CSS-Tricks</a> are also a great resource.
            </p>
            <p>
                Have a specific question?  Try searching or asking on <a class="help-links" href="http://stackoverflow.com/tour">Stack Overflow</a>. Stack Overflow is a question and answer site that can help beginners like you.  
            </p>
                  </div>
                </div>
              </div>
            </div>


<!-- Congratulations Modal 1 -->
            <div class="modal fade" id="CongratsModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    
                  </div>
                  <div class="modal-body">
                    <img class="img-responsive" src="images/Congratulations.png" alt="Home Page Instruction" width="100%" /><br />
                      <a class="btn btn-lg btn-primary text-center" role="button" href="my_restorations.php">Start a new module</a>
                      <a class="btn btn-lg btn-primary text-center" role="button" href="home.php#categorieslink">Browse categories</a>
                  </div>
                </div>
              </div>
            </div>
      

    <!-- Run the plugin -->
    <script type="text/javascript" src="joyride/jquery-1.10.1.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script type="text/javascript" src="joyride/jquery.joyride-2.1.js"></script>
    <script>
      $(window).load(function() {
        $('#joyRideTipContent').joyride({
          autoStart : true,
          postStepCallback : function (index, tip) {
          if (index == 2) {
            $(this).joyride('set_li', false, 1);
          }
        },
        modal:true,
        expose: true
        });
      });
    </script>
      
      
      
      <!--script for pop out help from   http://www.quackit.com/javascript/popup_windows.cfm -->
        <script language="javascript">
            var popupWindow = null;
            function positionedPopup(url,winName,w,h,t,l,scroll){
            settings =
            'height='+h+',width='+w+',top='+t+',left='+l+',scrollbars='+scroll+',resizable'
            popupWindow = window.open(url,winName,settings)
            }
        </script>

    <script src='https://cdnjs.cloudflare.com/ajax/libs/ace/1.1.3/ace.js'></script>
    <script src="SASS/dist/js/bootstrap.min.js"></script>
    <script src="js/historylink.js"></script>
      
      		<!-- This script sets up the Editor -->
        <script src="js/index.js"></script>

		<!-- This script adds content to the ditor -->
		<script src="js/cricket.js">printErrors();</script>


  </body>
</html>
