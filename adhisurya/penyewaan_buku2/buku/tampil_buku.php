<?php 
	include '../database.php';
	$db = new database();
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Data Buku</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<link rel="stylesheet" type="text/css" href="../css/style.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
		  	<li><a class="buttondashboard buttondashboard" href="../dashboard.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
		  	<li><a href="../user/tampil_user.php"><i class="fa fa-users" aria-hidden="true"></i> User</a></li>
		  	<li><a href="../buku/tampil_buku.php"><i class="fa fa-book" aria-hidden="true"></i> Buku</a></li>
		  	<li><a href="../member/tampil_member.php"><i class="fa fa-user-circle-o" aria-hidden="true"></i> Member</a></li>
		  	<li><a href="../penyewa/tampil_penyewa.php"><i class="fa fa-users" aria-hidden="true"></i> Penyewaan</a></li>
		  	<li><a href="../pengembalian/tampil_pengembalian.php"><i class="fa fa-retweet" aria-hidden="true"></i> Pengembalian</a></li>
		  	<li><a href="../kwitansi/tampil_kwitansi.php"><i class="fa fa-address-card" aria-hidden="true"></i> Kwitansi</a></li>
		</ul>
	<div id="header">
		<h3><i class="fa fa-book" aria-hidden="true"></i> Data Buku</h3>	
	</div>
		<a class="buttonadd button1" href="input_buku.php"><i class="fa fa-plus-square" aria-hidden="true"></i> Add</a>
	<table border="1" class="table table-striped">
		<tr>
			<th><i class="fa fa-sort" aria-hidden="true"></i> No.</th>
			<th><i class="fa fa-sort" aria-hidden="true"></i> Kode Buku</th>
			<th><i class="fa fa-sort" aria-hidden="true"></i> ISBN</th>
			<th><i class="fa fa-sort" aria-hidden="true"></i> Judul</th>
			<th><i class="fa fa-sort" aria-hidden="true"></i> Penulis</th>
			<th><i class="fa fa-sort" aria-hidden="true"></i> Penerbit</th>
			<th><i class="fa fa-sort" aria-hidden="true"></i> Tahun Terbit</th>
			<th><i class="fa fa-sort" aria-hidden="true"></i> Jenis</th>
			<th><i class="fa fa-sort" aria-hidden="true"></i> Foto</th>
			<th><i class="fa fa-sort" aria-hidden="true"></i> Opsi</th>
		</tr>
		<?php
			$no = 1;
			foreach($db->buku() as $x){
		?>
		<tr>
			<td align="center"><?php echo $no++; ?></td>
			<td align="center"><?php echo $x['kode_buku']; ?></td>
			<td><?php echo $x['isbn']; ?></td>
			<td><?php echo $x['judul']; ?></td>
			<td><?php echo $x['penulis']; ?></td>
			<td><?php echo $x['penerbit']; ?></td>
			<td align="center"><?php echo $x['tahun_terbit']; ?></td>
			<td><?php echo $x['jenis']; ?></td>
			<td><?php echo $x['foto']; ?></td>
			<td align="center">
				<a class="button button1" href="#" title="View"><i class="fa fa-eye" aria-hidden="true"></i> </a>
				<a class="button button2" href="edit_buku.php?id=<?php echo $x['id']; ?>&aksi=edit"><i class="fa fa-pencil" aria-hidden="true"></i> </a>
				<a class="button button3" href="../proses.php?id=<?php echo $x['id']; ?>&aksi=hapus_buku" onclick="return confirm('Are you sure you want to delete this item?');"><i class="fa fa-eraser" aria-hidden="true"></i> </a>			
			</td>
		</tr>
		<?php } ?>
		<table>
			<tr bgcolor="#4b4c4c" style="font-family: font-family: Verdana, Geneva, sans-serif; color: #FFFFFF" align="right">
				<br/>
				<br/>	
				<td colspan="7">Copyright @ 2017 Penyewaan Buku By <b>Adhi Surya</b></td>
			</tr>
		</table>
	</table>
</body>
</html>