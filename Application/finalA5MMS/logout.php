<?php

	require_once 'core.php';

	session_unset();
 	session_destroy();
	header('location:admin.php');
?>