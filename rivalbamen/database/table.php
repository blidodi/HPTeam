<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Form Kwitansi</title>
</head>
<body>
<h1>Bukti Kwitansi</h1><hr>
<a class="button2" href="tambah.php">Tambah</a>
<br/>
<table>
	<tr><th>No.</th>
		<th>Nama</th>
		<th>Nominal</th>
		<th>Kebutuhan</th>
		<th>Status</th>
		<th>Action</th>
	</tr>

<?php

	include "config.php";
	$sql = "SELECT data.*, status.nama as status FROM data JOIN status 
			WHERE  data.id=status.id_data";
	$data = mysql_query($sql);

	if(mysql_num_rows($data) > 0) {
		while ($row = mysql_fetch_array($data)) {
?>

	<tr>
		<td><?php echo $row['id'] ?></td>		
		<td><?php echo $row['nama'] ?></td>		
		<td><?php echo $row['nominal'] ?></td>		
		<td><?php echo $row['kebutuhan'] ?></td>
		<td><?php echo $row['status'] ?></td>
		<td><a class="button1" href="ubah.php?id=<?php echo $row['id'] ?>">Ubah</a> | 
			<a class="button" href="hapus.php?id=<?php echo $row['id']?>">Hapus</a></td>
	</tr>	
	
<?php
		} mysql_close();
	} else {
		echo "Tidak ada data";
	}

?>
</table>
</body>
</html>