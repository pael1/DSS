<?php
	require_once '../db/conn.php';
	$username = $_POST['username'];
	$password = $_POST['password'];
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$status = $_POST['status'];
	$payable = $_POST['payable'];
	$det = $_POST['det'];
	$dettwo = $_POST['dettwo'];
	$user_status = $_POST['user_status'];
	$conn->query("INSERT INTO `admin` VALUES('', '$username', '$password', '$fname', '$lname', '$status', '$payable', '$det', '$dettwo', '$user_status')") or die(mysqli_error());