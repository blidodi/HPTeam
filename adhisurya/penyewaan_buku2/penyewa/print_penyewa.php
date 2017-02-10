<?php 
include '../database.php';
$db = new database();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Edit Penyewa</title>
		<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
		<link rel="stylesheet" href="/resources/demos/style.css">
		  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
		  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
			  <script>
				  $( function() {
				    $( "#datepickerpinjam" ).datepicker({ dateFormat: 'yy-mm-dd' });
				    $( "#datepickerkembali" ).datepicker({ dateFormat: 'yy-mm-dd' });
				  } );
			  </script>
		
		<link rel="stylesheet" type="text/css" href="../css/kwitansi.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div id="header">
		<h1>Bukti Penyewaan Buku</h1>
	</div>
		<form action="../proses.php?aksi=print_penyewa" method="post">
			<?php
				foreach($db->print_penyewa($_GET['id']) as $print){
			?>
				<table>
					<a class="button button1" href="tampil_penyewa.php"><i class="fa fa-caret-left" aria-hidden="true"></i> Kembali</a>
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