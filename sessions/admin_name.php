<?php
	require_once '../db/conn.php';
	$acc_query = $conn->query("SELECT * FROM `superadmin` WHERE `super_id` = '$_SESSION[super_id]'") or die(mysqli_error());
	$acc_fetch = $acc_query->fetch_array();
	$acc_name = $acc_fetch['username'];

	