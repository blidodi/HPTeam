<?php 
include '../database.php';
$db = new database();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Free Bootstrap Admin Template : Two Page</title>
    <!-- BOOTSTRAP STYLES-->
    <link href="../assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="../assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLES-->
    <link href="../assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='../http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
		  <link rel="stylesheet" type="text/css" href="../assets/css/style2.css">
</head>
<body>
    <div id="header">
		<h1>Bukti Kwitansi Buku</h1>
	</div>
		<form action="../proses.php?aksi=print_kwitansi" method="post">
			<?php
				foreach($db->print_kwitansi($_GET['id']) as $print){
			?>
				<table class="table table-striped  table-hover">
					<a class="button button1" href="tampil_kwitansi.php"><i class="fa fa-caret-left" aria-hidden="true"></i> Kembali</a>
					<tr></tr>
					<tr>
						<td>No.</td>
						<td align="center">:</td>
						<td><?php echo $print['id'] ?></td>
					</tr>
					<tr>
						<td>No Penyewaan</td>
						<td align="center">:</td>
						<td><?php echo $print['kode_sewa'] ?></td>
					</tr>
					<tr>
						<td>No Buku</td>
						<td align="center">:</td>
						<td><?php echo $print['kode_buku'] ?></td>
					</tr>
					<tr>
						<td>Nama</td>
						<td align="center">:</td>
						<td><?php echo $print['kode_member'] ?></td>
					</tr>
					<tr>
						<td>User</td>
						<td align="center">:</td>
						<td><?php echo $print['kode_user'] ?></td>
					</tr>
					<tr>
						<td>Judul Buku</td>
						<td align="center">:</td>
						<td><?php echo $print['judul'] ?></td>
					</tr>
					<tr>
						<td>Tanggal Penyewaan</td>
						<td align="center">:</td>
						<td><?php echo $print['tanggal_pinjam'] ?></td>
					</tr>
					<tr>
						<td>Tanggal Pengembalian</td>
						<td align="center">:</td>
						<td><?php echo $print['tanggal_kembali'] ?></td>
					</tr>
					<tr>
						<td>Uang Sejumlah</td>
						<td align="center">:</td>
						<td></td>
					</tr>
			<?php } ?>
		</form>
</body>
</html>	