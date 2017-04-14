<?php 
	session_start();

	require_once 'function/connectDB.php';

	if(!$_SESSION['admin_id']) {
		header('location: admin.php');	
	} 
?>