<?php
	session_start();
	if(!ISSET($_SESSION['super_id'])){
		header("location: ../index.php");
	}
?>	