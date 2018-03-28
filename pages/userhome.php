<!DOCTYPE HTML>
<?php
	require_once '../sessions/session.php';
	require_once '../sessions/account_user.php';
?>
<html lang = "eng">
	<head>
		<meta charset =  "UTF-8">
		<link rel = "stylesheet" type = "text/css" href = "../css/bootstrap.css" />
		<meta name = "viewport" content = "width=device-width, initial-scale=1" />
		<title>Body-X Membership  System</title>
	</head>
<body class = "alert-warning">
	<nav class  = "navbar navbar-inverse">
		<div class = "container-fluid">
			<div class = "navbar-header">
				<a class = "navbar-brand">Body-X Membership System w/ DSS</a>
			</div>
				<ul class="nav navbar-nav navbar-right">
					<li><a><span class = "glyphicon glyphicon-user"></span> Hi,<?php echo $acc_fname?> !</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Settings <span class="caret"></span></a>
						<ul class="dropdown-menu">
            <li><a href="account1.php">Account Setting</a></li>
						<li><a href="logout1.php">Logout</a></li>
						</ul>
					</li>
				</ul>
		</div>
	</nav>
	<div class = "container-fluid main">

		<br />
    <div class="info">
   
          <thead>
      <!--       <tr>
              <th width="200px">Firstname</th>
              <th width="200px">Lastname</th>
              <th width="200px">Status</th>
              <th width="200px">Payables</th>
              <th width="300px">Due. Date</th>
            </tr> -->
          </thead>
          <tbody>
          <?php
              $query = $conn->query("SELECT * FROM `admin` WHERE `username`= '$acc_name'") or die(mysqli_error());
              while($f_query = $query->fetch_array()){
            ?><div class="back">
            <h1>Information</h1><br>
            <tr><th>Firstname:</th><br>

              <td align="center"><?php echo $f_query['fname']?></td></tr><br><br>

              <tr><th>Lastname:  </th><br>

              <td align="center"><?php echo $f_query['lname']?></td></tr><br><br>

              <tr><th>Session:  </th><br>

              <td align="center"><?php echo $f_query['status']?></td></tr><br><br>

              <tr><th>Payables:  </th><br>

              <td align="center"><?php echo $f_query['payable']?></td></tr><br><br>

              <tr><th>Due. Date:  </th><br>

              <td align="center"><?php echo date('M.d.Y', strtotime(str_replace('-', '/', $f_query['det'])))." up to ". date('M.d.Y', strtotime(str_replace('-', '/', $f_query['dettwo'])))?></td></tr></div>
              
            <?php
              }
            ?>
          </tbody>
    
        </div>
		<div class = "col-md-12 well">
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

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
</style>

<div align="center" class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="../img/gymlog.jpg" style="width:50%">
  <div class="text"></div>
</div>
<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="../img/gym.jpg" style="width:50%">
  <div class="text"></div>
</div>
<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="../img/gym1.jpg" style="width:50%">
  <div class="text"></div>
</div>
<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="../img/gym2.jpg" style="width:50%">
  <div class="text"></div>
</div>
<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="../img/gym3.jpg" style="width:50%">
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="../img/yogalog.jpg" style="width:50%">
  <div class="text"></div>
</div>
<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="../img/yoga.jpg" style="width:50%">
  <div class="text"></div>
</div>
<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="../img/yoga1.jpg" style="width:50%">
  <div class="text"></div>
</div>
<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="../img/yoga2.jpg" style="width:50%">
  <div class="text"></div>
</div>
<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="../img/yoga3.jpg" style="width:50%">
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="../img/zumbalog.jpg" style="width:50%">
  <div class="text"></div>
</div>
<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="../img/zumba.jpg" style="width:50%">
  <div class="text"></div>
</div>
<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="../img/zumba1.jpg" style="width:50%">
  <div class="text"></div>
</div>
<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="../img/zumba2.jpg" style="width:50%">
  <div class="text"></div>
</div>
<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="../img/zumba3.jpg" style="width:50%">
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
	<footer class = "navbar navbar-fixed-bottom navbar-inverse">
	</footer>
</body>	
<script src = "../js/jquery-3.1.1.js"></script>
<script src = "../js/bootstrap.js"></script>
<script src = "../js/script.js"></script>
</html>
<style type="text/css">
  .info {
    position: absolute;
  }
    .well {
    margin-left: 20%;
    width: 1050px;
  }
  .back{
    background-color: grey;
    padding: 10px;
    border-radius: 10px;
    color: white;
    height: 400px;
  }
</style>