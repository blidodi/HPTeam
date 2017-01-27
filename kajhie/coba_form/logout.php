<?php
session_start();

if (isset($_SESSION['user']) && isset($_SESSION['password'])) {
	# code...
	unset($_SESSION['user']);
	unset($_SESSION['password']);
	session_destroy();
	header('location:index.php');
}

?>