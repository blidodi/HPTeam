<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Bukti Kwitansi</title>
</head>

<body>
	<?php require "terbilang.php"; 
		if(isset($_POST['tampilkan'])) { ?>

	<h1>Bukti Kwitansi</h1>
	<hr><br/>
	<table>
		<tr>
			<td>No.</td>
			<td>:</td>
			<td><?php echo $_POST['no']?></td>
		</tr>
		<tr>
			<td>Telah diterima dari</td>
			<td>:</td>
			<td><?php echo $_POST['nama']?></td>
		</tr>
		<tr>
			<td>Uang Sejumlah</td>
			<td>:</td>
			<td><?php echo terbilang($_POST['jumlah'])?></td>
		</tr>
		<tr>
			<td>Untuk Pembayaran</td>
			<td>:</td>
			<td><?php echo $_POST['bayar']?></td>
		</tr>
	</table>
	<?php } ?>
</body>

</html>