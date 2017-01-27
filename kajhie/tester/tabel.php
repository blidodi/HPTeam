<?php
 include"koneksi.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Tabel</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<center>
<h3> Table Gaji </h3>

<table class="table" border="1">
	<tr>
		<th>No</th>
		<th>Diterima Untuk</th>
		<th>Nominal</th>
		<th>Kebutuhan</th>
		<th>Status</th>
		<th>Operasi</th>
	</tr>
<?php
//select `data`.*, `nama_status` as `status` from `data` join `status` where `data`.`no`=`status`.`id_status`
// and  `status`.`nama_status`='Belum Lunas'
	$sql = "SELECT `data`.*, `nama_status` as `status` from `data` join `status` where `data`.`no`=`status`.`id_status`";

	$hasil = mysql_query($sql);
	while ($data = mysql_fetch_array($hasil)) {
?>
	<tr>
		<td><?php echo $data['no']?></td>
		<td><?php echo $data['dari']?></td>
		<td><?php echo $data['nominal']?></td>
		<td><?php echo $data['kebutuhan']?></td>
		<td><?php echo $data['status']?></td>
		<td>
			<a class="button_kuning" href="ubah.php?id=<?php echo $data['no']?>">Update</a> <a class="button_merah" href="proses_hapus.php?id=<?php echo $data['no']?>">Delete</a>
		</td>
	</tr>
	<?php
}
	?>
</table>
<br/>
<a class="button_biru" href="tambah_data.php">Tambah Data</a>
</center>
</body>
</html>