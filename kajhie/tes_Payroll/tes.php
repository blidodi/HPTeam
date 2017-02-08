<?php
require 'control/controler.php';

$as = new coba();

// if ($as) {
// 		echo "Terkoneksi";
// }else{
// 	echo "koneksi gagal";
// }
?>

<h3>Data User</h3>
 
<a href="input.php">Input Data</a>
<table border="1">
	<tr>
		<th>No</th>
		<th>Nama</th>
		<th>Alamat</th>
		<th>Usia</th>
		<th>Opsi</th>
	</tr>
	<?php
	$no = 1;

	// $data = "SELECT * FROM user";
	$result = $as->view();

	while ($tampil = mysql_fetch_array($result)) {
	?>
	<tr>
		<td><?php echo $no++; ?></td>
		<td><?php echo $tampil['user_name']; ?></td>
		<td><?php echo $tampil['email']; ?></td>
		<td><?php echo $tampil['level']; ?></td>
		<td>
			<a href="edit.php?id=<?php echo $x['id']; ?>&aksi=edit">Edit</a>
			<a href="proses.php?id=<?php echo $x['id']; ?>&aksi=hapus">Hapus</a>			
		</td>
	</tr>
	<?php 
	}
	?>
</table>