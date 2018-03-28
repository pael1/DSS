<!DOCTYPE html>
<?php
  require_once '../sessions/sessionad.php';
  require_once '../sessions/admin_name.php';
?>
<html>
  <head>
    <meta charset="utf-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS-->
    <link rel="stylesheet" type="text/css" href="../csst/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="../imagest/icon.jpg" />
    <title>Body-X Membership System</title>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries-->
    <!--if lt IE 9
    script(src='https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js')
    script(src='https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js')
    -->
  </head>
  <body class="sidebar-mini fixed">
    <div class="wrapper">
      <!-- Navbar-->
      <header class="main-header hidden-print"><a class="logo" href="hometry.php">Body-X</a>
        <nav class="navbar navbar-static-top">
          <!-- Sidebar toggle button--><a class="sidebar-toggle" href="#" data-toggle="offcanvas"></a>
          <!-- Navbar Right Menu-->
          <div class="navbar-custom-menu">
            <ul class="top-nav">
              <!--Notification Menu-->
              <!-- User Menu-->
              <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user fa-lg"></i></a>
                <ul class="dropdown-menu settings-menu">
                  <li><a href="logout.php"><i class="fa fa-sign-out fa-lg"></i> Logout</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!-- Side-Nav-->
      <aside class="main-sidebar hidden-print">
        <section class="sidebar">
          <div class="user-panel">
            <div class="pull-left image"><img  style="height: 50px;"  class="img-circle" src="../imagest/pael.jpg" alt="User Image"></div>
            <div class="pull-left info">
              <p>ADMIN</p>
              <p class="designation">Pael Gwapo</p>
            </div>
          </div>
          <!-- Sidebar Menu-->
          <ul class="sidebar-menu">
            <li class="active"><a href="hometry.php"><i class="fa fa-dashboard"></i><span>Dashboard</span></a></li>
            <li class="treeview"><a href="#"><i class="fa fa-user-circle-o"></i><span>User</span><i class="fa fa-angle-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="actry.php"><i class="fa fa-circle-o"></i> Account</a></li>
                <li><a href="memtry.php"><i class="fa fa-circle-o"></i> Member</a></li>
                <li><a href="sestry.php"><i class="fa fa-circle-o"></i> Session</a></li>
              </ul>
            </li>
            <li><a href="sales.php"><i class="fa fa-money"></i><span>Sales</span></a></li>
        </section>
      </aside>
      <div class="content-wrapper">
        <div class="page-title">
          <div>
            <h1><i class="fa fa-dashboard"></i> Dashboard</h1>
          </div>
          <div>
            <ul class="breadcrumb">
            </ul>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="card">
              <h3 class="card-title">Body-X Membership System w/ DSS</h3>
              <p><b>Fitness</b> is defined as the quality or state of being fit. Around 1950, perhaps consistent with the Industrial Revolution and the treatise of World War II, the term "fitness" increased in western vernacular by a factor of ten. Modern definition of fitness describe either a person or machine's ability to perform a specific function or a holistic definition of human adaptability to cope with various situations. This has led to an interrelation of human fitness and attractiveness which has mobilized global fitness and fitness equipment industries. Regarding specific function, fitness is attributed to person who possess significant aerobic or anaerobic ability, i.e. strength or endurance. A well rounded fitness program will improve a person in all aspects of fitness, rather than one, such as only cardio/respiratory endurance or only weight training.</p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card">
              <meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing:border-box}
body {font-family: Verdana,sans-serif;}
.mySlides {display:none}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: black;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 13px;
  width: 13px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}
img{
  width: 400px;
  height: 400px;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 30px) {
  .text {font-size: 11px}
}
</style>

<div align="center" class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="../img/1.jpg">
  <div class="text"></div>
</div>
<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="../img/2.jpg">
  <div class="text"></div>
</div>
<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="../img/3.jpg">
  <div class="text"></div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span>
  <span class="dot"></span> 
  <span class="dot"></span> 
  
 
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex> slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Javascripts-->
    <script src = "../js/jquery-3.1.1.js"></script>
    <script src="../jst/bootstrap.min.js"></script>
    <script src = "../js/bootstrap.js"></script>
    <script src="../jst/plugins/pace.min.js"></script>
    <script src="../jst/main.js"></script>
    <script src = "../js/script.js"></script>
  </body>
</html>