<?php

	require_once 'coreEmp.php';

	session_unset();
	session_destroy();
	header('location:login.php');
?>