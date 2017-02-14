<?php 
include '../database.php';
$db = new database();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="../css/crud.css">
	<link rel="stylesheet" type="text/css" href="../css/form.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>Edit Buku</title>
</head>
<body>
<div id="headertop">
		<a class="buttonlogout buttonlogout" href="../Logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a>
	</div>
	</div>
	</div>
		<div id="header">
		<img src="../image/hdr2.jpg">	
	</div>
		<ul>
		  	<li><a href="../dashboard.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
		  	<li><a href="../user/tampil_user.php"><i class="fa fa-users" aria-hidden="true"></i> User</a></li>
		  	<li><a href="../buku/tampil_buku.php"><i class="fa fa-book" aria-hidden="true"></i> Buku</a></li>
		  	<li><a href="../member/tampil_member.php"><i class="fa fa-user-circle-o" aria-hidden="true"></i> Member</a></li>
		  	<li><a href="../penyewa/tampil_penyewa.php"><i class="fa fa-users" aria-hidden="true"></i> Penyewaan</a></li>
		  	<li><a href="../pengembalian/tampil_pengembalian.php"><i class="fa fa-retweet" aria-hidden="true"></i> Pengembalian</a></li>
		  	<li><a href="../kwitansi/tampil_kwitansi.php"><i class="fa fa-address-card" aria-hidden="true"></i> Kwitansi</a></li>
		</ul>
    <div id="header">
		<h1><i class="fa fa-pencil" aria-hidden="true"></i> Edit Buku</h1>
	</div>
		<form action="../proses.php?aksi=update_buku" method="post">
			<?php
				foreach($db->edit_buku($_GET['id']) as $d){
			?>
				<table>
					<tr>
						<td>Kode Buku</td>
						<td align="center">:</td>
						<td>
							<input type="hidden" name="id" value="<?php echo $d['id'] ?>">
							<input type="text" name="kode_buku" value="<?php echo $d['kode_buku'] ?>">
						</td>
					</tr>
					<tr>
						<td>ISBN</td>
						<td align="center">:</td>
						<td><input type="text" name="isbn" value="<?php echo $d['isbn'] ?>"></td>
					</tr>
					<tr>
						<td>Judul</td>
						<td align="center">:</td>
						<td><input type="text" name="judul" value="<?php echo $d['judul'] ?>"></td>
					</tr>
					<tr>
						<td>Penulis</td>
						<td align="center">:</td>
						<td><input type="text" name="penulis" value="<?php echo $d['penulis'] ?>"></td>
					</tr>
					<tr>
						<td>Penerbit</td>
						<td align="center">:</td>
						<td><input type="text" name="penerbit" value="<?php echo $d['penerbit'] ?>"></td>
					</tr>
					<tr>
						<td>Tahun Terbit</td>
						<td align="center">:</td>
						<td><input type="text" name="tahun_terbit" value="<?php echo $d['tahun_terbit'] ?>"></td>
					</tr>
					<tr>
						<td>Jenis</td>
						<td align="center">:</td>
						<td><input type="text" name="jenis" value="<?php echo $d['jenis'] ?>"></td>
					</tr>
					<tr>
						<td></td>
						<td align="center"></td>
						<td><input class="button button2" type="submit" value="Simpan"><a href="tampil_buku.php" class="button button2">Batal</a></td>

					</tr>
				</table>
			<?php } ?>
		</form>
		<table>
			<tr bgcolor="#4b4c4c" style="font-family: font-family: Verdana, Geneva, sans-serif; color: #FFFFFF" align="right">
				<br/>
				<br/>	
				<td colspan="7">Copyright @ 2017 Penyewaan Buku By <b>Adhi Surya</b></td>
			</tr>
		</table>
</body>
</html>	