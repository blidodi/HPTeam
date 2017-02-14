<?php 
	include '../../model/sewa-model.php';
	$db = new Sewa();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Bukti Kwitansi</title>
</head>
<body>
	<h1>Kwitansi Penyewaan Buku</h1>
	<hr><br/>
	<form action="../../controller/sewa-controller.php?action=print" method="post"action>
		<?php
			foreach($db->tampil_kwitansi($_GET['id']) as $cetak){
		?>
		
	<table>
		<tr>
			<td>No.</td>
			<td>:</td>
			<td><?php echo $cetak['id'] ?></td>
		</tr>
		<tr>
			<td>Tanggal Sewa</td>
			<td>:</td>
			<td><?php echo $cetak['tanggal'] ?></td>
		</tr>
		<tr>
			<td>Tanggal kembali</td>
			<td>:</td>
			<td><?php echo $cetak['kembali'] ?></td>
		</tr>
		<tr>
			<td>Nama Member</td>
			<td>:</td>
			<td><?php echo $cetak['nama'] ?></td>
		</tr>
		<tr>
			<td>Judul Buku</td>
			<td>:</td>
			<td><?php echo $cetak['judul'] ?></td>
		</tr>
		<tr>
			<td>Total Bayar</td>
			<td>:</td>
			<td><?php echo $cetak['harga'] ?></td>
		</tr>
	</table>
	<?php } ?>
	</form>
	 <button onClick="window.print();">Print</button> 
</body>
</html>