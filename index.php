<!DOCTYPE HTML>
<?php
	require 'db/conn.php';
?>
<html lang = "eng">
	<head>
		<meta charset =  "UTF-8">
		<link rel = "stylesheet" type = "text/css" href = "css/bootstrap.css" />
		<meta name = "viewport" content = "width=device-width, initial-scale=1" />
		<link rel="shortcut icon" href="imagest/icon.jpg" />
		<title>Body-X Membership  System</title>
	</head>
<body class = "alert-warning">
	<nav class  = "navbar navbar-inverse">
		<div class = "container-fluid">
			<div class = "navbar-header">
				<a class = "navbar-brand">Body-X Membership w/ DSS System</a>
			</div>
		</div>
	</nav>
	<div class = "row">	
		<div class = "col-md-4">
		</div>
		
			<button class="btn btn btn-warning"><a href="pages/adlogtry.php"><span class = "glyphicon glyphicon-log-in">&nbsp;</span>Login as Admin</a></button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<button class="btn btn btn-primary" ><a href="pages/memlog.php"><span class = "glyphicon glyphicon-log-in">&nbsp;</span>Login as Member</a></button>
		</div>
		<br><br><br><br>
		<h1 align="center"><b></b></h1>
		<br>
		<img src="img/1.jpg">
		<div class = "col-md-4">
		</div>
	</div>	
	<footer class = "navbar navbar-fixed-bottom navbar-inverse">
	</footer>
</body>	
<script src = "js/jquery-3.1.1.js"></script>
<script src = "js/bootstrap.js"></script>
<script src = "js/script.js"></script>
</html>
<style type="text/css">
	a{
		color: white;
	}
	img{
		border-radius: 20px;
	}
	button.btn {
  -webkit-background-clip: border-box;
  -webkit-background-origin: padding-box;
  -webkit-background-size: auto;
  -webkit-transition-delay: 0s, 0s;
  -webkit-transition-duration: 0.2s, 0.2s;
  -webkit-transition-property: color, background-color;
  -webkit-transition-timing-function: ease, ease;
  box-shadow: rgba(0, 0, 0, 0.498039) 0px 0px 5px 0px;
  color: #ffffff;
  background-color: skyblue;
  margin: 0;
  border: 0;
  outline: 0;
  text-transform:uppercase;
  height:40px;
  width:200px;
  border: 1px solid #5E5E5E;
  border-radius:5px;
  
 }

button.btn:hover {
  color: #ffffff;
  background: grey;
  text-decoration: none;
}
img{
	width: 500px;
	height: 350px;
}
</style>