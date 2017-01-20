<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Form Kwitansi</title>
</head>

<body>
	<h1><u>Form Kwitansi</u></h1>
	<form action="hasilkwi.php" method="post" >
	<table>
		
		<tr>
			<td>No.</td>
			<td>:</td>
			<td><input type="text" name="no" /></td>
		</tr>
		<tr>
			<td>Telah diterima dari</td>
			<td>:</td>
			<td><input type="text" name="nama" /></td>
		</tr>
		<tr>
			<td>Uang Sejumlah</td>
			<td>:</td>
			<td><input type="text" name="jumlah" /></td>
		</tr>
		<tr>
			<td>Untuk Pembayaran</td>
			<td>:</td>
			<td><input type="text" name="bayar" /></td>
		</tr>
		<tr>
			<td>
				<input type="submit" value="Tampilkan" name="tampilkan" />
			</td>
		</tr>
		
	</table>
	</form>
</body>

</html>