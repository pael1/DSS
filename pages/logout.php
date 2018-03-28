<?php
	session_start();
	session_unset('super_id');
	header('location: adlogtry.php');
