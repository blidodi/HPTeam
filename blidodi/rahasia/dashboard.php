<?php 
session_start();
	if(!isset($_SESSION['data']) && !$_SESSION['data'] == '123') {
		header('location:index.php');
	}
?>

selamat datang di <b>Dashboard</b>
<br/>
<a href="hapus.php">Logout</a>
