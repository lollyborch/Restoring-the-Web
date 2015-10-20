<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- all other head elements after this point -->
    <!-- page is built on Bootstrap 4 -->
    <title>Web Historians</title>

      <link href="SASS/dist/css/bootstrap.min.css" rel="stylesheet">
      
      <!-- web fonts for header -->
    <link href="css/webfont-stylesheet.css" rel="stylesheet">
    
  </head>
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
                        <a class="nav-link nav-active active" href="gallery.html">Gallery</a>
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

      <!-- Gallery starts-->
      
      <div class="container">
          <div class="otherrow">
                <h1>Gallery</h1>
              <a class="btn btn-lg btn-primary text-center" data-toggle="modal" data-target="#HelpModal" role="button">Help Button </a>
                <br />
                
              
<!-- Gallery modal content starts-->
              <!-- Gallery Modal 1 -->
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
      
      <script language="javascript">
var popupWindow = null;
function centeredPopup(url,winName,w,h,scroll){
LeftPosition = (screen.width) ? (screen.width-w)/2 : 0;
TopPosition = (screen.height) ? (screen.height-h)/2 : 0;
settings =
'height='+h+',width='+w+',top='+TopPosition+',left='+LeftPosition+',scrollbars='+scroll+',resizable'
popupWindow = window.open(url,winName,settings)
}
</script>
      
      <p><a href="http://www.quackit.com/javascript/examples/sample_popup.cfm" onclick="centeredPopup(this.href,'myWindow','700','300','yes');return false">Centered Popup</a></p>
      
      
  </body>
</html>