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
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>Dashboard</title>
</head>
<body>
   	<div id="header">
		<h1>Penyewaan Buku</h1>
	</div>
		<ul>
		  	<li><a href="dashboard.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
		  	<li><a href="user/tampil_user.php"><i class="fa fa-users" aria-hidden="true"></i> User</a></li>
		  	<li><a href="buku/tampil_buku.php"><i class="fa fa-users" aria-hidden="true"></i> Buku</a></li>
		  	<li><a href="member/tampil_member.php"><i class="fa fa-users" aria-hidden="true"></i> Member</a></li>
		  	<li><a href="penyewa/tampil_penyewa.php"><i class="fa fa-users" aria-hidden="true"></i> Penyewa</a></li>
		  	<li><a href="pengembalian/tampil_pengembalian.php"><i class="fa fa-users" aria-hidden="true"></i> Pengembalian</a></li>
		  	<li><a href="kwitansi/tampil_kwitansi.php"><i class="fa fa-users" aria-hidden="true"></i> Kwitansi</a></li>
		  	<li><a href="Logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></li>
		</ul>
</body>
</html>