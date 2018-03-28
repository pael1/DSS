<?php
	require_once '../db/conn.php';
	$username = $_POST['username'];
	$password = $_POST['password'];
	$query = $conn->query("SELECT * FROM `superadmin` WHERE `username` = '$username' && `password` = '$password'") or die(mysqli_error());
	$validate = $query->num_rows;
	$fetch = $query->fetch_array();
	if($validate > 0){
		echo "Success";
		session_start();
		$_SESSION['super_id'] = $fetch['super_id'];
	}else{
		echo "Error";
	}