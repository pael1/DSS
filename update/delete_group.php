<?php
	require_once '../db/conn.php';
	$club_id = $_REQUEST['club_id'];
	$conn->query("DELETE FROM `group` WHERE `group_id` = '$_REQUEST[group_id]'") or die(mysqli_error());
	header("location:../pages/grotry.php?club_id=".$club_id."");