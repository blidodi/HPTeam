<?php
	session_start();
	if(!isset($_SESSION['data']) && !$_SESSION['data'] == '123' && isset($_SESSION['nama']) && !$_SESSION['nama'] == 'Rival') {
		header('location:index.php');
	}
?>
<html>
<head>
	<title>Dashboard</title>
	<style>
		a {
   			text-decoration: none;
   			background: rgb(0, 196, 146);
   			color: white;
 			border-radius: 5px;
 			padding: 5px;
		}

		a:hover {
			color: black;
		    text-decoration: underline;
		}

	</style>
	</head>
<body>
	<h1 align="center">Selamat Datang di Dashboard</h1><hr>
		<h2><?php echo "Nama : ".$_SESSION['nama']; ?></h2>
	<a href="logout.php">Logout</a>
</body>
</html>