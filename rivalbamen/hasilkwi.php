<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Bukti Kwitansi</title>
</head>

<body>
	<?php if(isset($_POST['tampilkan'])) { ?>
	<h1><u>Bukti Kwitansi</u></h1>
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
			<td><?php echo $_POST['jumlah']?></td>
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