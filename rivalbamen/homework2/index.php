<?php
//session login
session_start();
	if(!isset($_SESSION['password']) && !isset($_SESSION['username'])) {
		header('location:login.php');
	}
?>