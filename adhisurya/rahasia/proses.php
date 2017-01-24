<?php
	if(isset($_POST['save']) && $_POST['save'] == "Save") {
		if(empty($_POST['data'])) {
			header('location:index.php?pesan=1&nama=1');
		} else if (isset($_POST['data']) && $_POST['data'] == '123' && isset($_POST['huruf']) && $_POST['huruf'] == 'surya') {
			session_start();
			$_SESSION['data'] = $_POST['data'];
			$_SESSION['huruf'] = $_POST['huruf'];
			header('location:dashboard.php');
		} else {
			header('location:index.php?pesan=2&nama=2');
		}
	} else {
		header('location:index.php');
	}
?>