<?php 
	include '../database.php';
	$db = new database();
?>

<!DOCTYPE html>
<html>
<title>Sistem Akademik</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="../css/style.css">
		<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
			<style>
				html,body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
			</style>
<body class="w3-light-grey">
	<div class="w3-container w3-top w3-black w3-large w3-padding" style="z-index:4">
		<button class="w3-btn w3-hide-large w3-padding-0 w3-hover-text-grey" onclick="w3_open();"><i class="fa fa-bars"></i></button>
			<span class="w3-right"><br></span>
	</div>
	<nav class="w3-sidenav w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidenav"><br>
		<div class="w3-container w3-row">
			<div class="w3-col s4">
				<img src="../image/hp.jpg" class="w3-circle w3-margin-right" style="width:46px">
			</div>
    <div class="w3-col s8">
    	<span>Welcome<strong></strong></span><br>
    		<a href="#" class="w3-hover-none w3-hover-text-red w3-show-inline-block"><i class="fa fa-envelope"></i></a>
    		<a href="#" class="w3-hover-none w3-hover-text-green w3-show-inline-block"><i class="fa fa-user"></i></a>
    		<a href="#" class="w3-hover-none w3-hover-text-blue w3-show-inline-block"><i class="fa fa-cog"></i></a>
    </div>
	</div>
  	<hr>
	<div class="w3-container">
		<h5>Dashboard</h5>
	</div>
    	<a href="#" class="w3-padding-16 w3-hide-large w3-dark-grey w3-hover-black" onclick="w3_close()" title="close menu"><i class="fa fa-remove fa-fw"></i>  Close Menu</a>
    	<a href="../dashboard.php" class="w3-padding w3-blue"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
    	<a href="../user/tampil_user.php" class="w3-padding"><i class="fa fa-users" aria-hidden="true"></i> User</a>
    	<a href="../buku/tampil_buku.php" class="w3-padding"><i class="fa fa-book" aria-hidden="true"></i> Buku</a>
      	<a href="member/tampil_member.php" class="w3-padding"><i class="fa fa-user-circle-o" aria-hidden="true"></i> Member</a>
      	<a href="penyewa/tampil_penyewa.php" class="w3-padding"><i class="fa fa-users" aria-hidden="true"></i> Penyewa</a>
      	<a href="pengembalian/tampil_pengembalian.php" class="w3-padding"><i class="fa fa-retweet" aria-hidden="true"></i> Pengembalian</a>
      	<a href="kwitansi/tampil_kwitansi.php" class="w3-padding"><i class="fa fa-address-card" aria-hidden="true"></i> Kwitansi</a>
      	<a href="../Logout.php" class="w3-padding"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a>
	</nav>
	<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>
	<div class="w3-main" style="margin-left:300px;margin-top:43px;">

	<div id="header">
		<h1><i class="fa fa-users" aria-hidden="true"></i> Data User</h1>	
	</div>
	<a class="button button1" href="input_user.php"><i class="fa fa-plus" aria-hidden="true"></i> Tambah</a>
	
	<table border="1">
		<tr>
			<th><i class="fa fa-sort" aria-hidden="true"></i> ID</th>
			<th><i class="fa fa-sort" aria-hidden="true"></i> Kode User</th>
			<th><i class="fa fa-sort" aria-hidden="true"></i> Nama</th>
			<th><i class="fa fa-sort" aria-hidden="true"></i> Username</th>
			<th><i class="fa fa-sort" aria-hidden="true"></i> Password</th>
			<th><i class="fa fa-sort" aria-hidden="true"></i> Opsi</th>
		</tr>
		<?php
			$no = 1;
			foreach($db->user() as $x){
		?>
		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $x['kode_user']; ?></td>
			<td><?php echo $x['nama']; ?></td>
			<td><?php echo $x['username']; ?></td>
			<td><?php echo $x['password']; ?></td>
			<td>
				<a class="button button2" href="edit_user.php?id=<?php echo $x['id']; ?>&aksi=edit"><i class="fa fa-pencil" aria-hidden="true"></i> Edit</a>
				<a class="button button3" href="../proses.php?id=<?php echo $x['id']; ?>&aksi=hapus_user"><i class="fa fa-eraser" aria-hidden="true"></i> Hapus</a>			
			</td>
		</tr>
		<?php } ?>
	</table>

</body>
</html>