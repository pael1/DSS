<!DOCTYPE html>
<?php
  require_once '../sessions/session.php';
  require_once '../sessions/account_user.php';
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
      <header class="main-header hidden-print"><a class="logo" href="userhometry.php">Body-X</a>
        <nav class="navbar navbar-static-top">
          <!-- Sidebar toggle button--><a class="sidebar-toggle" href="#" data-toggle="offcanvas"></a>
          <!-- Navbar Right Menu-->
          <div class="navbar-custom-menu">
            <ul class="top-nav">
              <!--Notification Menu-->
              <!-- User Menu-->
              <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user fa-lg"></i></a>
                <ul class="dropdown-menu settings-menu">
                <li><a href="acc1try.php">Account Setting</a></li>
                  <li><a href="logout1.php"><i class="fa fa-sign-out fa-lg"></i> Logout</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!-- Side-Nav-->
      <?php
              $query = $conn->query("SELECT * FROM `admin` WHERE `username`= '$acc_name'") or die(mysqli_error());
              while($f_query = $query->fetch_array()){
            ?>
      <aside class="main-sidebar hidden-print">
        <section class="sidebar">
          <div class="user-panel">
            <div class="pull-left image fa-user-circle-o"></div>
            <div class="pull-left info">
            <p class="text-capitalize"><?php echo $f_query['fname']?></p>
            </div>
          </div>
          <!-- Sidebar Menu-->
          <ul class="sidebar-menu">
            <li class="treeview"><a href="#"><i class="fa fa-user-circle-o"></i><span style="margin-left: 30px;">Information</span><i class="fa fa-angle-right"></i></a>
              <ul class="treeview-menu">
                <li class="text-capitalize"><a href="#"><i></i>Firstname: <?php echo $f_query['fname']?></a></li>
                <li class="text-capitalize"><a href="#"><i></i>Lastname: <?php echo $f_query['lname']?></a></li>
                <li class="text-capitalize"><a href="#"><i></i>Session: <?php echo $f_query['status']?></a></li>
                <li><a href="#"><i></i>Due. Date: </a></li>
                <li><a href="#"><i></i><?php echo date('M.d.Y', strtotime(str_replace('-', '/', $f_query['det'])))." up to ". date('M.d.Y', strtotime(str_replace('-', '/', $f_query['dettwo'])))?></a></li>
              </ul>
            </li>
        </section>
      </aside>
      <div class="content-wrapper">
        <div class="page-title">
          <div>
            <h1><i class="fa fa-dashboard"></i> Hi, <?php echo $f_query['fname']?>!</h1>
          </div>
          <?php
              }
            ?>
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
  <div class="numbertext"></div>
  <img src="../img/1.jpg">
  <div class="text"></div>
</div>
<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="../img/2.jpg">
  <div class="text"></div>
</div>
<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="../img/3.jpg">
  <div class="text"></div>
</div>
<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="../img/gym.jpg">
  <div class="text"></div>
</div>
<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="../img/gym1.jpg">
  <div class="text"></div>
</div>
<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="../img/gym2.jpg">
  <div class="text"></div>
</div>
<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="../img/gym3.jpg">
  <div class="text"></div>
</div>
<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="../img/yoga1.jpg">
  <div class="text"></div>
</div>
<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="../img/yoga2.jpg">
  <div class="text"></div>
</div>
<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="../img/yoga3.jpg">
  <div class="text"></div>
</div>
<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="../img/zumba1.jpg">
  <div class="text"></div>
</div>
<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="../img/zumba2.jpg">
  <div class="text"></div>
</div>
<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="../img/zumba3.jpg">
  <div class="text"></div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span>
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
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
<style type="text/css">
  .main-sidebar {
  position: absolute;
  top: 0;
  left: 0;
  padding-top: 50px;
  min-height: 100vh;
  width: 250px;
  z-index: 810;
  -webkit-box-shadow: 0px 8px 17px rgba(0, 0, 0, 0.2);
          box-shadow: 0px 8px 17px rgba(0, 0, 0, 0.2);
  -webkit-transition: width 0.3s ease-in-out, -webkit-transform 0.3s ease-in-out;
  transition: width 0.3s ease-in-out, -webkit-transform 0.3s ease-in-out;
  -o-transition: transform 0.3s ease-in-out, width 0.3s ease-in-out;
  transition: transform 0.3s ease-in-out, width 0.3s ease-in-out;
  transition: transform 0.3s ease-in-out, width 0.3s ease-in-out, -webkit-transform 0.3s ease-in-out;
}
.page-title {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
  -webkit-box-orient: horizontal;
  -webkit-box-direction: normal;
      -ms-flex-direction: row;
          flex-direction: row;
  background-color: #FFF;
  margin-top: -30px;
  margin-left: -10px;
  margin-right: -30px;
  margin-bottom: 30px;
  padding: 20px 30px;
  -webkit-box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1);
          box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1);
}

.row {
  margin-left: -10px;
  margin-right: -15px;
}
</style>