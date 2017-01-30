<?php
//session login
session_start();
	if(!isset($_SESSION['password']) && !isset($_SESSION['username'])) {
		header('location:login.php');
	}
	include "koneksi.php";
	$sql = "SELECT nama FROM user 
			WHERE username='".$_SESSION['username']."'";		
			$result = mysql_query($sql);
			$row = mysql_fetch_array($result);
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
	<div id="container">
    	<div id="header">
			<h1>Dashboard</h1>
		</div>
		<ul>
			<li><a class="active" href="#dashboard"><i class="fa fa-home"></i> Home</a></li>
			<li><a href="user-table.php"><i class="fa fa-users"></i> User</a></li>
			<li><a href="kwitansi-table.php"><i class="fa fa-credit-card-alt"></i> Kwitansi</a></li>
			<li style="float:right"><a href="logout.php"><i class="fa fa-sign-out"></i> Logout</a></li>
		</ul>
		<div class="form">
			<p>Selamat Datang di <b>Dashboard</b> <i class="fa fa-user"> </i><?php echo " "."<u>".$row['nama']; ?></u></p>
			<br/>
			<img src="rb-icon.png" class="image">
		</div>
		<div id="footer">
			<center>Copyright &copy; 2017 Designed by Rivalbamen</center>
		</div>
	</div>	
</body>
</html>