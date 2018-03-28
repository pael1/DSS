<?php
	require_once '../db/conn.php';
	$conn->query("DELETE FROM `admin` WHERE `admin_id` = '$_REQUEST[admin_id]'") or die(mysqli_error());
	header('location: ../pages/actry.php');
