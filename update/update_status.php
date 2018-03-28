<?php
	session_start();
	
	require_once('../db/conn.php');
	
	$get_userid = $_GET['userid'];
	
	$query = $conn->query("SELECT * FROM `admin` WHERE admin_id=$get_userid") or die(mysqli_error());
	while($f_query = $query->fetch_array()){
	echo $curr_status = $f_query['user_status'];
	}
		
	if($curr_status == "active") {
		$conn->query("UPDATE admin 
        SET user_status='deactive'
		WHERE admin_id=$get_userid") or die(mysqli_error());
		header("location: ../pages/actry.php");
	} else {
		$conn->query("UPDATE admin 
        SET user_status='active'
		WHERE admin_id=$get_userid") or die(mysqli_error());
		header("location: ../pages/actry.php");
	}
?>