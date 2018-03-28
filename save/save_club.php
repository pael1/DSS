<?php
	require_once '../db/conn.php';
	$club = $_POST['club'];
	$session = $_POST['session'];
	$conn->query("INSERT INTO `club` VALUES('', '$club', '$session')") or die(mysqli_error());
