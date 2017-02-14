<?php
session_start();

	if (isset($_SESSION['email']) && isset($_SESSION['password'])) {
		unset($_SESSION['email']);
		unset($_SESSION['password']);
		unset($_SESSION['id']);
		unset($_SESSION['nama']);
		session_destroy();
		header('location:../view/login.php?page=0');
	}

?>