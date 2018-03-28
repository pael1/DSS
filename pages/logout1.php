<?php
	session_start();
	session_unset('admin_id');
	header('location: memlog.php');
