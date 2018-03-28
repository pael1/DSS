<?php
	require_once '../db/conn.php';
	$acc_query = $conn->query("SELECT * FROM `admin` WHERE `admin_id` = '$_SESSION[super_id]'") or die(mysqli_error());
	$acc_fetch = $acc_query->fetch_array();
	$acc_name = $acc_fetch['username'];
	$acc_pass = $acc_fetch['password'];
	$acc_fname = $acc_fetch['fname'];
	$acc_lname = $acc_fetch['lname'];
	