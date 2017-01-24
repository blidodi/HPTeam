<?php
	session_start();
		if(!isset($_SESSION['data']) && !$_SESSION['data'] == '123' && isset($_SESSION['huruf']) && !$_SESSION['huruf'] == 'surya') {
			header('location:index.php');
		}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
	<style>
		* {
			font-family: arial;
		}
		a {
			text-decoration: none;
			padding: 5px;
			border: none;
			background: pink;
			border-radius: 5px;
			color: white;
			font-size: 13px;
			width: 50px;
			height: 25px;
		}

		a:hover {
			color: black;
			text-decoration: none;
		}
	</style>
</head>
<body>
	Selamat Datang di <b>Dashboard</b> <?php echo $_SESSION['huruf']; ?>
	<br/>
	<br/>
	<a href="hapus.php">Logout</a>
</body>
</html>