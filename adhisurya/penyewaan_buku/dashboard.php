<?php
	session_start();
		if(!isset($_SESSION['username']) && !isset($_SESSION['password'])) {
			header('location:login.php');
		}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>Dashboard</title>
</head>
<body>
   <div id="header">
		<h1>Penyewaan Buku</h1>
	</div>
<ul>
  <li><a href="dashboard.php"><i class="fa fa-home" aria-hidden="true"></i>
 Home</a></li>
  <li><a href="tampil_user.php"><i class="fa fa-users" aria-hidden="true"></i>
 User</a></li>
   <li><a href="tampil_buku.php"><i class="fa fa-users" aria-hidden="true"></i>
 Buku</a></li>
  <li><a href="Logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i>
 Logout</a></li>
</ul>
</body>
</html>