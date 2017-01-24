<?php
session_start();
	if (!isset($_SESSION['pass']) && !$_SESSION['pass'] == 'chiput1993' && !isset($_SESSION['user']) && !$_SESSION['user'] == 'chiput') {
		header('location:index.php');
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Latihan HTML Part 1</title>
	<style type="text/css">
		input{
			width: 100%;
			padding: 5px 10px;
			border:none;
			background-color: #f1f1f1;
		}
		input[type = submit]{
			background-color: #4CAF50;
		    border: none;
		    color: white;
		    padding: 7px 10px;
		    text-decoration: none;
		    margin: 4px 2px;
		    cursor: pointer;
		}
		legend{
			padding-left: 10px;
			padding-right: 10px;
		}
	</style>
</head>
<body>
<form action="tampil.php" method="get">
<center>
<fieldset>
<legend class="legend"><h2>Form Kwitansi</h2></legend>
<table>
	<tr class="input">
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
</fieldset>
</center>
</body>
</html>