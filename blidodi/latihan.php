<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Latihan HTML</title>
<link rel="stylesheet" href="main/style.css" type="text/css"/>

</head>

<body>
	<form action="passingvar.php" method="post">
		<table  width="400" height="200">
			<th colspan="3">BUKTI PEMBAYARAN</th>
			<tr class="abu">
				<td>No.</td>
				<td align="center">:</td>
				<td><input type="text" name="no" /></td>
				
			</tr>
			<tr>
				<td>Telah diterima</td>
				<td align="center">:</td>
				<td><input type="text" name="nama" /></td>
				
			</tr>
			<tr class="abu">
				<td>Uang sejumlah</td>
				<td align="center">:</td>
				<td><input type="text" name="bilangan" value="<?php echo @$_POST['bilangan'] ?>" /></td>
			</tr>
			<tr>
				<td>Untuk pembayaran</td>
				<td align="center">:</td>
				<td><input type="text" name="pembayaran" /></td>
			</tr>
			<tr>
				<td colspan="3" align="right">
					<input type="submit" name="terbilang" value="Terbilang"/>
				</td>
			</tr>
		</table>
	</form>
</body>

</html>