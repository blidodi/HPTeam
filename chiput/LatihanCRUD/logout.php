<?php
session_start();

if (isset($_SESSION['username']) && isset($_SESSION['password'])) {
	# code...
	unset($_SESSION['username']);
	unset($_SESSION['password']);
	session_destroy();
	header('location:index.php');
}
?>