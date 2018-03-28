<?php
	require_once '../db/conn.php';
	$club = $_POST['club'];
	$query = $conn->query("SELECT * FROM `club` WHERE `club_name` = '$club' ") or die(mysqli_error());
	$validate = $query->num_rows;
	if($validate > 0){
		echo "Success";
	}else{
		echo "Error";
	}