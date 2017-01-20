<!DOCTYPE html>
<html>
<head>

<meta charset="UTF-8">
<title>Latihan HTML</title>
</head>

<body>
	<form action="passingvar.php" method="post">
		<table  width="400" height="200" border="1" align="center" cellpadding="5" cellspacing="0" style="background-color:#FFFFFF;border:solid 1px #C3C3C3;">
			<th colspan="3" bgcolor="#CCCCCC">Bukti Pembayaran</th>
			<tr>
				<td>No.</td>
				<td align="center">:</td>
				<td align="center"><input type="text" name="no" /></td>
				
			</tr>
			<tr>
				<td>Telah diterima</td>
				<td align="center">:</td>
				<td align="center"><input type="text" name="nama" /></td>
				
			</tr>
			<tr>
				<td>Uang sejumlah</td>
				<td align="center">:</td>
				<td align="center"><input type="text" name="bilangan" value="<?php echo @$_POST['bilangan'] ?>" /></td>
			</tr>
			<tr>
				<td>Untuk pembayaran</td>
				<td align="center">:</td>
				<td align="center"><input type="text" name="pembayaran" /></td>
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