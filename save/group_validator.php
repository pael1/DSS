<?php
	require_once '../db/conn.php';
	$admin_id = $_POST['admin_id'];
	$club_id = $_POST['club_id'];
	$query = $conn->query("SELECT * FROM `group` WHERE `admin_id` = '$admin_id' && `club_id` = '$club_id'") or die(mysqli_error());
	$validate = $query->num_rows;
	if($validate > 0){
		echo "Success";
	}else{
		echo "Error";
	}