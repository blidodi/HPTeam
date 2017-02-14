<?php
session_start();

if (isset($_SESSION['username']) && isset($_SESSION['password'])) {
	# code...
	unset($_SESSION['username']);
	unset($_SESSION['password']);
	unset($_SESSION['id']);
	session_destroy();
	header('location:../view/form_login.php');
}
 //echo "<script>alert('Anda telah berhasil keluar.'); window.location = '../view/form_login.php'</script>";
?>