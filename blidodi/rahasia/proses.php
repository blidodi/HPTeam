<?php 
	if(isset($_POST['save']) && $_POST['save'] == "Save") {
		if(empty($_POST['data'])) {
			header('location:index.php');
		} else if (isset($_POST['data']) && $_POST['data'] == '123') {
			session_start();
			$_SESSION['data'] = $_POST['data'];
		  	header('location:dashboard.php');
		} else {
			header('location:index.php');
		}
	}
?>