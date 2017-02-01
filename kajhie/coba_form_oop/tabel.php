<?php
 include"koneksi.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>Tabel Buku</title>
	<style type="text/css" class="css/style.css"></style>
</head>
<body>
<center>
<h2> Daftar Buku </h2>

<table class="table" border="1">
	<tr>
		<th>No</th>
		<th>ISBN</th>
		<th>Judul</th>
		<th>Penulis</th>
		<th>Penerbit</th>
		<th>Tempat Terbit</th>
		<th>Tahun</th>
		<th>Operator</th>
	</tr>
<?php
	include "koneksi.php";
	$sql = "SELECT * FROM `buku`";

	$hasil = mysql_query($sql);

	$i=1;
	if (mysql_num_rows($hasil) > 0) {
	while ($data = mysql_fetch_array($hasil)) {
?>
	<tr>
		<td><?php echo $i ?></td>
		<td><?php echo $data['isbn']?></td>
		<td><?php echo $data['judul']?></td>
		<td><?php echo $data['penulis']?></td>
		<td><?php echo $data['penerbit']?></td>
		<td><?php echo $data['tempat_terbit']?></td>
		<td><?php echo $data['tahun_terbit']?></td>
		<td>

			<a class="button_kuning" href="edit.php?id=<?php echo $data['id_buku']?>">Update</a> <a class="button_merah" href="hapus_buku.php?id=<?php echo $data['id_buku']?>">Delete</a>

		</td>
	</tr>
<?php
			$i++;
		}
			mysql_close();
	}else{
		echo "Tidak ada data !!";
	}
	?>
</table>
<br/>
<a class="button_biru" href="tambah_buku.php">Tambah Data</a>
</center>

</body>
</html>