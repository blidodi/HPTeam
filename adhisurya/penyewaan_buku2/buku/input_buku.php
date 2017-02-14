<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="../css/crud.css">
	<link rel="stylesheet" type="text/css" href="../css/form.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>Tambah Buku</title>
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
		<h1><i class="fa fa-plus-circle" aria-hidden="true"></i> Tambah Buku</h1>
	</div>
	<form action="../proses.php?aksi=tambah_buku" method="post">
		<table>
			<tr>
				<td>Kode Buku</td>
				<td align="center">:</td>
				<td><input type="text" name="kode_buku"></td>
			</tr>
			<tr>
				<td>ISBN</td>
				<td align="center">:</td>
				<td><input type="text" name="isbn"></td>
			</tr>
			<tr>
				<td>Judul</td>
				<td align="center">:</td>
				<td><input type="text" name="judul"></td>
			</tr>
			<tr>
				<td>Penlis</td>
				<td align="center">:</td>
				<td><input type="text" name="penulis"></td>
			</tr>
			<tr>
				<td>Penerbit</td>
				<td align="center">:</td>
				<td><input type="text" name="penerbit"></td>
			</tr>
			<tr>
				<td>Tahun Terbit</td>
				<td align="center">:</td>
				<td><input type="text" name="tahun_terbit"></td>
			</tr>
			<tr>
				<td>Jenis</td>
				<td align="center">:</td>
				<td><input type="text" name="jenis"></td>
			</tr>
			<tr>
				<td></td>
				<td align="center"></td>
				<td><input class ="button button1" type="submit" value="Simpan"><a class="button button1" href="tampil_buku.php">Batal</a></td>
			</tr>
		</table>
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