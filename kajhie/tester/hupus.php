<?php
session_start();

if(isset($_SESSION['nama']) && isset($_SESSION['password'])) {
	unset($_SESSION['nama']);
	unset($_SESSION['password']);
	session_destroy();
	header('location:index.php');
}
?>