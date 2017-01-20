<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Latihan HTML</title>

</head>

<body>
	<?php
	if (isset($_POST['terbilang'])) {
		require "konfigurasi.php";
	?>	
	<table width="400" height="200" border="1" align="center" cellpadding="5" cellspacing="0" style="background-color:#FFFFFF;border:solid 1px #C3C3C3;">
		<th colspan="3" bgcolor="#CCCCCC">Bukti Pembayaran</th>
		<tr>
			<td>No.</td>
			<td align="center">:</td>
			<td><?php echo $_POST['no'] ?></td>
			
		</tr>
		<tr>
			<td>Telah diterima</td>
			<td align="center">:</td>
			<td><?php echo $_POST['nama'] ?> </td>
			
		</tr>
		<tr>
			<td>Uang sejumlah</td>
			<td align="center">:</td>
			<td><?php echo bilangan($_POST['bilangan']) ?></td>
		</tr>
		<tr>
			<td>Untuk pembayaran</td>
			<td align="center">:</td>
			<td><?php echo $_POST['pembayaran'] ?></td>
		</tr>
	</table>
	<?php } ?>
</body>

</html>