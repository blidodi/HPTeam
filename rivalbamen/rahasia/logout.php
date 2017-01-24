<?php 
session_start();

if(isset($_SESSION['data']) && isset($_SESSION['nama'])) {
	unset($_SESSION['data']);
	unset($_SESSION['nama']);
	session_destroy();
	header('location:index.php');
}
?>