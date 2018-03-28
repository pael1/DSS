<?php
	require_once '../db/conn.php';
	$username = $_POST['username'];
	$password = $_POST['password'];
	$query = $conn->query("SELECT * FROM `admin` WHERE `username` = '$username' && `password` = '$password'") or die(mysqli_error());
	$validate = $query->num_rows;
	$fetch = $query->fetch_array();
	if($fetch > 0){
		$query = $conn->query("SELECT * FROM `admin` WHERE `username` = '$username'") or die(mysqli_error());
		while($fetchs = $query->fetch_array()){
				$curr_status = $fetchs['user_status'];
		}
				if($curr_status=='deactive') {
					echo "Curr";
				}else{
					echo "Success";
					session_start();
					$_SESSION['admin_id'] = $fetch['admin_id'];
				}}
	else{
		echo "Error";
	}