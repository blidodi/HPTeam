<?php
	session_start();
		if(isset($_SESSION['data']) && isset($_SESSION['huruf'])) {
			unset($_SESSION['data']);
			unset($_SESSION['huruf']);
			session_start();
			header('location:index.php');
		}
?>