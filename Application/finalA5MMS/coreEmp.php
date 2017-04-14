<?php 
	session_start();
	require_once 'function/connectDB.php';

	if(!$_SESSION['app_id']) {
		header('location: login.php');	
	} 
?>