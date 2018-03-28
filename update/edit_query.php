<?php
	require_once '../db/conn.php';
	$username = $_POST['username'];
	$password = $_POST['password'];
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$status = $_POST['status'];

	$conn->query("UPDATE `admin` SET `username` = '$username', `password` = '$password', `fname` = '$fname', `lname` = '$lname', `status` = '$status' WHERE `admin_id` = '$_REQUEST[admin_id]'") or die(mysqli_error());