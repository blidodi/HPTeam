<?php
session_start();

	if (isset($_SESSION['email']) && isset($_SESSION['password'])) {
		unset($_SESSION['email']);
		unset($_SESSION['password']);
		session_destroy();
		header('location:../../index.php');
	}

?>