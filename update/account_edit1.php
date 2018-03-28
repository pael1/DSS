<!DOCTYPE HTML>
<?php
	require_once '../sessions/session.php';
	require_once '../sessions/account_user.php';
?>
<html lang = "eng">
	<head>
		<meta charset =  "UTF-8">
		<link rel = "stylesheet" type = "text/css" href = "../css/bootstrap.css" />
		<link rel = "stylesheet" type = "text/css" href = "../css/jquery.dataTables.css" />
		<meta name = "viewport" content = "width=device-width, initial-scale=1" />
		<title>Body-X Membership  System</title>
	</head>
<body class = "alert-warning">
	<nav class  = "navbar navbar-inverse">
		<div class = "container-fluid">
			<div class = "navbar-header">
				<a class = "navbar-brand">Membership System</a>
			</div>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="userhome.php"><span class = "glyphicon glyphicon-user"></span>Hi,<?php echo $acc_name?></a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Settings <span class="caret"></span></a>
						<ul class="dropdown-menu">
						<li><a href="logout.php">Logout</a></li>
						</ul>
					</li>
				</ul>
		</div>
	</nav>
	<div class = "container-fluid">
		<br />
		<div class = "col-md-12 well">
			<a class = "btn btn-success" href = "../pages/account1.php"><span class = "glyphicon glyphicon-hand-right"></span> Back</a>
			<br/>
			<br/>
			<div class  = "alert alert-warning">Account / Update</div>
			<div class = "row">	
				<div class = "col-md-2 ">
				</div>
				<div class = "col-md-2">
				</div>
				<div class = "col-md-4">
					<?php
						$acc_query = $conn->query("SELECT * FROM `admin` WHERE admin_id = '$_REQUEST[admin_id]'") or die(mysqli_error());
						$acc_fetch = $acc_query->fetch_array();
					?>
					<form method = "POST">
						<div class = "form-group">
							<label>Username</label>
							<input  id = "username" type = "text" value = "<?php echo $acc_fetch['username']?>" class = "form-control" />
							<input  id = "admin_id" type = "hidden" value = "<?php echo $acc_fetch['admin_id']?>" class = "form-control" />
						</div>
						<div class = "form-group">
							<label>Password</label>
							<input type = "password" id = "password" type = "text" value= "<?php echo $acc_fetch['password']?>" class = "form-control" />
						</div>
						<div class = "form-group">
						<label for="exampleInputName4">Session</label>
                      <select class="form-control" id = "status">
                        <option><?php echo $acc_fetch['status']?></option>
                        <option value="Gym">Gym</option>
                        <option value="Zumba">Zumba</option>
                        <option value="Yoga">Yoga</option>
                        </select>
					</div>
						<div id = "loading">
						</div>
						<br />
						<div class = "form-group">
							<button  type = "button" id = "acc_edit1" class = "btn btn-warning form-control"><span class = "glyphicon glyphicon-edit"></span> Save Changes</button>
						</div>
					</form>
				</div>
			</div>	
		</div>
	</div>
	<footer class = "navbar navbar-fixed-bottom navbar-inverse">
	</footer>
</body>	
<script src = "../js/jquery-3.1.1.js"></script>
<script src = "../js/bootstrap.js"></script>
<script src = "../js/script.js"></script>
<script src = "../js/jquery.dataTables.min.js"></script>
<script type = "text/javascript">
	$(document).ready(function(){
		$('#table').DataTable();
	})
</script>
</html>