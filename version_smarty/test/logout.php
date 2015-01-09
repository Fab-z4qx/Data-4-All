<?php
	session_start();
	$_SESSION['Auth'] = array();
	header('Location:index.php');
?>
