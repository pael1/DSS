<!DOCTYPE HTML>
	<html lang = "eng">
		<head>
			<meta charset =  "UTF-8">
			<link rel = "stylesheet" type = "text/css" href = "../css/bootstrap.css" />
			<link rel = "stylesheet" type = "text/css" href = "../css/jquery.dataTables.css" />
			<meta name = "viewport" content = "width=device-width, initial-scale=1" />
			<title>Body-X Membership System</title>
		</head>
<body class = "alert-warning">

		<br />
		<div class = "col-md-12 well">
			<br/>
			<div class = "alert alert-info">
			<a href="memlog.php"><span class = "glyphicon glyphicon-log-in">Back</span></a>
				
			</div>
		</div>
	</div>
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="myModalLabel">Member's Registration</h4>
			</div>
			<div class="modal-body">
				<form method = "POST" enctype = "multipart/form-data">
					<div class = "form-group">
						<label>Username</label>
						<input type = "text" class = "form-control" id = "username"/>
					</div>
					<div class = "form-group">
						<label>Password</label>
						<input type = "password" class = "form-control" id = "password"/>
					</div>

					<div class = "form-group">
						<label>Firstname</label>
						<input type = "text" class = "form-control" id = "fname"/>
					</div>

					<div class = "form-group">
						<label>Lastname</label>
						<input type = "text" class = "form-control" id = "lname"/>
						<input type = "hidden" class = "form-control" id="user_status" value="active" />
					</div>

					<div class = "form-group">
						<label for="exampleInputName4">Session</label>
                      <select class="form-control" id = "status">
                        <option selected></option>
                        <option value="Gym">Gym</option>
                        <option value="Zumba">Zumba</option>
                        <option value="Yoga">Yoga</option>
                        </select>
					</div>

					<div class = "form-group">
						<!-- <label>Payable</label>
						<input type = "number" class = "form-control" id = "payable"/> -->
						<label for="exampleInputName4">Month/s</label>
                      <select class="form-control" id = "payable">
                        <option selected></option>
                        <option value="500">1 Month</option>
                        <option value="1000">2 Month</option>
                        <option value="1500">3 Month</option>
                        <option value="2000">4 Month</option>
                        <option value="2500">5 Month</option>
                        <option value="3000">6 Month</option>
                        <option value="3500">7 Month</option>
                        <option value="4000">8 Month</option>
                        <option value="4500">9 Month</option>
                        <option value="5000">10 Month</option>
                        <option value="5500">11 Month</option>
                        <option value="6000">12 Month</option>
                        </select>
					</div>

					<div class = "form-group">
            <!-- <label>Start</label>
            <input type = "date" class = "form-control" id = "det"/> -->
            <label for="exampleInputName4">Starting Month</label>
            <input type="date" class="form-control input-size" id="det">
          </div>

          <div class = "form-group">
            <!-- <label>Expire</label>
            <input type = "date" class = "form-control" id = "dettwo"/> -->
            <label for="exampleInputName4">End Month</label>
            <input type="date" class="form-control input-size" id="dettwo">
          </div>
					<div id = "loading">
						
					</div>
			</div>
			<div class="modal-footer">
				<button type="button" id= "signup1" class="btn btn-primary"><span class = "glyphicon glyphicon-save"></span> Save</button>
			</div>
				</form>
		</div>
	</div>
	</div>
	<br><br>
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