<?php
	require_once '../db/conn.php';
	$username = $_POST['username'];
	$password = $_POST['password'];
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$payable = $_POST['payable'];
	$status = $_POST['status'];
	$det = $_POST['det'];
	$dettwo = $_POST['dettwo'];
	$conn->query("UPDATE `admin` SET `username` = '$username', `password` = '$password', `fname` = '$fname', `lname` = '$lname', `payable` = '$payable', `status` = '$status', `det` = '$det', `dettwo` = '$dettwo' WHERE `admin_id` = '$_REQUEST[admin_id]'") or die(mysqli_error());