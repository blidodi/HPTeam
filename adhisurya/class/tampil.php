<?php 
include 'database.php';
$db = new database();
?>
<h3>Data Buku</h3>

<a href="input.php">Input Data</a>
<table border="1">
	<tr>
		<th>ID</th>
		<th>ISBN</th>
		<th>Nama</th>
		<th>Penulis</th>
		<th>Penerbit</th>
		<th>Opsi</th>
	</tr>
	<?php
	$no = 1;
	foreach($db->tampil_data() as $x){
	?>
	<tr>
		<td><?php echo $no++; ?></td>
		<td><?php echo $x['isbn']; ?></td>
		<td><?php echo $x['nama']; ?></td>
		<td><?php echo $x['penulis']; ?></td>
		<td><?php echo $x['penerbit']; ?></td>
		<td>
			<a href="edit.php?id=<?php echo $x['id']; ?>&aksi=edit">Edit</a>
			<a href="proses.php?id=<?php echo $x['id']; ?>&aksi=hapus">Hapus</a>			
		</td>
	</tr>
	<?php 
	}
	?>
</table>