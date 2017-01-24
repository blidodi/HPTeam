<?php
session_start();
if (isset($_SESSION['nama'])&&isset($_SESSION['pass'])) {
	unset($_SESSION['nama']);
	unset($_SESSION['pass']);
	session_destroy();
	header('location:index.php');
}
?>