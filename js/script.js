	$(document).ready(function(){
	$error = $('<center><label class = "text-danger">Please Fill up the form!</label></center>');
	$error1 = $('<center><label class = "text-danger">Invalid username or password</label></center>');
	$error11 = $('<center><label class = "text-danger">Invalid username or password</label></center>');
	$error12 = $('<center><label class = "text-warning">Your Account is Deactivated by Admin<br><center><small><label class = "text-danger">Contact the Administrator</label></small></center></label></center>');
	$loading = $('<center><img src = "images/loading.gif"></center>');
	$load_status= $('<center><label class = "text-success">Waiting...</label></center>');
	$valid = $('<center><label class = "text-danger">Username already taken!</label></center>');
	$mem_valid = $('<center><label class = "text-danger">Member name already exist!</label></center>');
	$club_valid = $('<center><label class = "text-danger">Instructor Name already exist!</label></center>');
	$group_valid = $('<center><label class = "text-danger">Member already joined!</label></center>');
	
// Administrator Login	
	$('#login').click(function(){
		$error.remove();
		$error1.remove();
		$username  = $('#username').val();
		$password = $('#password').val();
		if($username == "" && $password == ""){
			$error.appendTo('#loading');
		}else{
			$loading.appendTo('#loading');
				$.post('adminlog.php', {username: $username, password: $password},
					function(result){
						if(result == "Success"){
							window.location = 'hometry.php';
							$('#username').val('');
							$('#password').val('');
							$loading.remove();
						}else{
							$error1.appendTo('#loading');
							$('#username').val('');
							$('#password').val('');
							$loading.remove();
						}
					}
				)	
		}
	});
	
	$('#login1').click(function(){
		$error.remove();
		$error1.remove();
		$error11.remove();
		$error12.remove();
		$username  = $('#username').val();
		$password = $('#password').val();
		if($username == "" && $password == ""){
			$error.appendTo('#loading');
		}else{
			$loading.appendTo('#loading');
				$.post('../save/validate.php', {username: $username, password: $password},
					function(result){
						if(result == "Success"){
									window.location = '../pages/userhometry.php';
									$('#username').val('');
									$('#password').val('');
									$loading.remove();
						}

						else if(result == "Curr"){
									$error12.appendTo('#loading');
									$('#username').val('');
									$('#password').val('');
									$loading.remove();

						}

						else{
							$error11.appendTo('#loading');
							$('#username').val('');
							$('#password').val('');
							$loading.remove();
						}
					}
				)	
		}
	});
	
//Administrator Registration	
	$('#signup').click(function(){
		$error.remove();
		$valid.remove();
		$username = $('#username').val();
		$password = $('#password').val();
		$fname = $('#fname').val();
		$lname = $('#lname').val();
		$status = $('#status').val();
		$payable = $('#payable').val();
		$det = $('#det').val();
		$dettwo = $('#dettwo').val();
		$user_status = $('#user_status').val();
		if($username == "", $password == "", $fname == "", $lname == ""){
			$error.appendTo('#loading');
		}else{
			$load_status.appendTo('#loading');
				$.post('../save/valid_signup.php', {username: $username},
					function(result){
						if(result == "Success"){
							$valid.appendTo('#loading');
						}else{
							$.ajax({
								type: 'POST',
								url: '../save/save_data.php',
								data: {username: $username, password: $password, fname: $fname, lname: $lname, status: $status, payable: $payable, det: $det, dettwo: $dettwo, user_status: $user_status},
								success: function(){
									window.alert('Succesfully Added')
									window.location = 'actry.php';
								}
							});
						}
					}
				)
				$load_status.remove();
		}
	});


	$('#signup1').click(function(){
		$error.remove();
		$valid.remove();
		$username = $('#username').val();
		$password = $('#password').val();
		$fname = $('#fname').val();
		$lname = $('#lname').val();
		$status = $('#status').val();
		$payable = $('#payable').val();
		$det = $('#det').val();
		$dettwo = $('#dettwo').val();
		$user_status = $('#user_status').val();
		if($username == "", $password == "", $fname == "", $lname == ""){
			$error.appendTo('#loading');
		}else{
			$load_status.appendTo('#loading');
				$.post('../save/valid_signup.php', {username: $username},
					function(result){
						if(result == "Success"){
							$valid.appendTo('#loading');
						}else{
							$.ajax({
								type: 'POST',
								url: '../save/save_data.php',
								data: {username: $username, password: $password, fname: $fname, lname: $lname, status: $status, payable: $payable, det: $det, dettwo: $dettwo, user_status: $user_status},
								success: function(){
									window.alert('Success')
									window.location = 'memlog.php';
								}
							});
						}
					}
				)
				$load_status.remove();
		}
	});

//Administrator Edit
	$('#acc_edit').click(function(){
		$admin_id = $('#admin_id').val();
		$error.remove();
		$valid.remove();
		$username = $('#username').val();
		$password = $('#password').val();
		$fname = $('#fname').val();
		$lname = $('#lname').val();
		$payable = $('#payable').val();
		$status = $('#status').val();
		$det = $('#det').val();
		$dettwo = $('#dettwo').val();
		if($username == "" || $password == ""){
			$error.appendTo('#loading');
		}else{
			$load_status.appendTo('#loading');
							$.ajax({
								type: 'POST',
								url: 'account_edit_query.php?admin_id=' + $admin_id,
								data: {username: $username, password: $password, fname: $fname, lname: $lname, payable: $payable, status: $status, det: $det, dettwo: $dettwo},
								success: function(){
									window.alert('Updated Succesfully')
									window.location = '../pages/actry.php';
								}
							});
				$load_status.remove();
		}
	});

	//mem edit
	$('#acc_edit1').click(function(){
		$admin_id = $('#admin_id').val();
		$error.remove();
		$valid.remove();
		$username = $('#username').val();
		$password = $('#password').val();
		$fname = $('#fname').val();
		$lname = $('#lname').val();
		$status = $('#status').val();
		if($username == "" || $password == ""){
			$error.appendTo('#loading');
		}else{
			$load_status.appendTo('#loading');
							$.ajax({
								type: 'POST',
								url: 'edit_query.php?admin_id=' + $admin_id,
								data: {username: $username, password: $password, fname: $fname, lname: $lname, status: $status},
								success: function(){
									window.alert('Updated Succesfully')
									window.location = '../pages/acc1try.php';
								}
							});
				$load_status.remove();
		}
	});

// Member Registration
	$('#save_member').click(function(){
		$error.remove();
		$mem_valid.remove();
		$firstname = $('#firstname').val();
		$lastname = $('#lastname').val();
		if($firstname == "" || $lastname == ""){
			$error.appendTo('#loading');
		}else{
			$load_status.appendTo('#loading');
				$.post('mem_validator.php', {firstname: $firstname, lastname: $lastname},
					function(result){
						if(result == "Success"){
							$mem_valid.appendTo('#loading');
						}else{
							$.ajax({
								type: 'POST',
								url: 'save_member.php',
								data: {firstname: $firstname, lastname: $lastname},
								success: function(){
									window.location = 'member.php';
								}
							});
						}
					}
				)
			$load_status.remove();	
		}
	});
// Club Registration
$('#save_club').click(function(){
		$error.remove();
		$club_valid.remove();
		$club = $('#club').val();
		$session = $('#session').val();
		if($club == "" || $session == "" ){
			$error.appendTo('#loading');
		}else{
			$load_status.appendTo('#loading');

				$.post('../save/club_validator.php', {club: $club, session: $session},
					function(result){
						if(result == "Success"){
							$club_valid.appendTo('#loading');
						}else{
							$.ajax({
								type: 'POST',
								url: '../save/save_club.php',
								data: {club: $club, session: $session},
								success: function(){
									window.location = 'sestry.php';
								}
							});
						}
					}
				)
			$load_status.remove();	
		}
	});
// Club Edit
$('#club_edit').click(function(){
		$error.remove();
		$club_id = $('#club_id').val();
		$club_valid.remove();
		$club = $('#club').val();
		if($club == ""){
			$error.appendTo('#loading');
		}else{
			$load_status.appendTo('#loading');

				$.post('../save/club_validator.php', {club: $club},
					function(result){
						if(result == "Success"){
							$club_valid.appendTo('#loading');
						}else{
							$.ajax({
								type: 'POST',
								url: '../update/club_edit_query.php?club_id=' + $club_id,
								data: {club: $club},
								success: function(){
									window.location = '../pages/sestry.php';
								}
							});
						}
					}
				)
			$load_status.remove();	
		}
	});
	$('#save_group').click(function(){
		$error.remove();
		$group_valid.remove();
		$admin_id = $('#member').val();
		$club_id = $('#club').val();
		if($admin_id == "" ){
			$error.appendTo('#loading');
		}else{
			$load_status.appendTo('#loading');

				$.post('../save/group_validator.php', {admin_id: $admin_id, club_id: $club_id},
					function(result){
						if(result == "Success"){
							$group_valid.appendTo('#loading');
						}else{
							$.ajax({
								type: 'POST',
								url: '../save/save_group.php',
								data: {admin_id: $admin_id, club_id: $club_id},
								success: function(){
									window.location = 'grotry.php?club_id=' + $club_id;
								}
							});
						}
					}
				)
			$load_status.remove();	
		}
	});
});