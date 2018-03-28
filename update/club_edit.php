<!DOCTYPE HTML>
<?php
	require_once '../sessions/sessionad.php';
	require_once '../sessions/account_name.php';
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
	<div class = "container-fluid">
		<br />
		<div class = "col-md-12 well">
			<a class = "btn btn-success" href = "../pages/sestry.php"><span class = "glyphicon glyphicon-hand-right"></span> Back</a>
			<br/>
			<br/>
			<div class = "alert alert-warning">Club / Update</div>
			<div class = "row">	
				<div class = "col-md-2 ">
				</div>
				<div class = "col-md-2">
				</div>
				<div class = "col-md-4">
					<?php
						$acc_query = $conn->query("SELECT * FROM `club` WHERE club_id = '$_REQUEST[club_id]'") or die(mysqli_error());
						$acc_fetch = $acc_query->fetch_array();
					?>
					<form method = "POST">
						<div class = "form-group">
							<label>Club name</label>
							<input  id = "club" type = "text" value = "<?php echo $acc_fetch['club_name']?>" class = "form-control" />
							<input  id = "club_id" type = "hidden" value = "<?php echo $acc_fetch['club_id']?>" class = "form-control" />
						</div>
						<div id = "loading">
						</div>
						<br />
						<div class = "form-group">
							<button  type = "button" id = "club_edit" class = "btn btn-warning form-control"><span class = "glyphicon glyphicon-edit"></span> Save Changes</button>
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