<?php
	require_once '../db/conn.php';
	$club_id = $_POST['club_id'];
	$admin_id = $_POST['admin_id'];
	$conn->query("INSERT INTO `group` VALUES('', '$club_id', '$admin_id')") or die(mysqli_error());
