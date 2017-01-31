<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Bukti Kwitansi</title>
</head>

<body>

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
			<td><?php echo ($_POST['jumlah'])?></td>
		</tr>
		<tr>
			<td>Untuk Pembayaran</td>
			<td>:</td>
			<td><?php echo $_POST['bayar']?></td>
		</tr>
	</table><br/>
	<a href="kwitansi.php">Kwitansi Baru</a>
</body>

</html>