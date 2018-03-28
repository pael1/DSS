<?php
	require_once '../db/conn.php';
	$club = $_POST['club'];
	$conn->query("UPDATE `club` SET `club_name` = '$club' WHERE `club_id` = '$_REQUEST[club_id]'") or die(mysqli_error());