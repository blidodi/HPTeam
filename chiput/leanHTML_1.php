<!DOCTYPE html>
<html>
<head>
	<title>Latihan HTML Part 1</title>
</head>
<body>
<form action="main.php" method="get">
<table>
	<tr>
		<td>No.</td>
		<td>:</td>
		<td><input type="text" name="nomor" value="isikan nomor" /></td>
	</tr>
	<tr>
		<td>Sudah Diterima dari</td>
		<td>:</td>
		<td><input type="text" name="nama" value="isikan nama" /></td>
	</tr>
	<tr>
		<td>Nominal</td>
		<td>:</td>
		<td><input type="text" name="bilangan" value="isikan nominal uang"."<?php echo @$_GET['bilangan']?>" /></td>
	</tr>
	<tr>
		<td>Untuk Pembayaran</td>
		<td>:</td>
		<td><input type="text" name="namalg" value="untuk pembayaran" /></td>
	</tr>
	<tr>
		<td><input type="submit" name="terbilang" value="Terbilang"/></td>
	</tr>
</table>
</form>
</body>
</html>