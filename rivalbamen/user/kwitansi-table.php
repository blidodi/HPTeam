<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>Tabel Kwitansi</title>
</head>
<body>
<div id="container">
    <div id="header">
		<h1>Tabel Kwitansi</h1>
	</div>
	<ul>
		<li><a href="dashboard.php"><i class="fa fa-home"></i> Home</a></li>
		<li><a href="user-table.php"><i class="fa fa-users"></i> User</a></li>
		<li><a class="active" href="#kwitansi"><i class="fa fa-credit-card-alt"></i> Kwitansi</a></li>
		<li style="float:right"><a href="logout.php"><i class="fa fa-sign-out"> </i> Logout</a></li>
	</ul>
	<div class="form">
	<a class="button2" href="kwitansi-add.php"><i class="fa fa-plus"> </i> Tambah</a>
	<table>
		<tr><th>No.</th>
			<th>Nama</th>
			<th>Nominal</th>
			<th>Kebutuhan</th>
			<th>Status</th>
			<th>Action</th>
		</tr>

<?php

	include "koneksi.php";
	$sql = "SELECT kwitan.id, kwitan.nama, kwitan.nominal, kwitan.kebutuhan, bayar.nm_bayar 
			FROM kwitan, bayar
			WHERE kwitan.bayar=bayar.id_bayar";
	$data = mysql_query($sql);

	if(mysql_num_rows($data) > 0) {
		while ($row = mysql_fetch_array($data)) {
?>

	<tr>
		<td><?php echo $row['id'] ?></td>		
		<td><?php echo $row['nama'] ?></td>		
		<td><?php echo $row['nominal'] ?></td>		
		<td><?php echo $row['kebutuhan'] ?></td>
		<td><?php echo $row['nm_bayar'] ?></td>
		<td><a class="button1" href="kwitansi-edit.php?id=<?php echo $row['id'] ?>"><i class="fa fa-pencil"> </i> Ubah</a> | 
			<a class="button" href="kwitansi-delete.php?id=<?php echo $row['id']?>"><i class="fa fa-close"> </i> Hapus</a></td>
	</tr>	
	
<?php
		} mysql_close();
	} else {
		echo "Tidak ada data";
	}

?>
</table>
</div>
	<div id="footer">
		<center>Copyright &copy; 2017 Designed by Rivalbamen</center>
	</div>
</div>
</body>
</html>