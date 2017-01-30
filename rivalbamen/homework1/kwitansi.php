<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Form Kwitansi</title>
</head>

<body>
	<?php session_start(); 
		if (isset($_SESSION['session_email'])) {
			?>

	<h1>Form Kwitansi</h1> 
	<hr>
	<form action="hasil.php" method="post">
	<table >
		
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
			<td colspan="3" align="right">
				<input type="submit" value="Tampilkan" name="tampilkan" />
			</td>
		</tr>
		
	</table>
	</form>
		<a href="logout.php">Logout</a>
<?php } ?>
</body>

</html>