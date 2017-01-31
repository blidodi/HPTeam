<?php 

session_start();
$email = $_POST['email'];
$password = $_POST['password'];

if (empty($email) && empty($password)) {
	header("location:index.php?empty_all");
} else if (empty($email) && ! empty($password)) {
	header("location:index.php?empty_email");
} else if (empty($email) && empty($password)) {
	header("location:index.php?empty_password");
} else {
	if ($email == 'rivalbamen@gmail.com' && $password == rival03) {
		$_SESSION['session_email'] = $email;
		header("location:kwitansi.php");
	} else {
		header("location:index.php?failed");
	}
}

?>