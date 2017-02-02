<?php 
include 'database.php';
$db = new database();
?>

<h3>Edit Data Buku</h3>

<form action="proses.php?aksi=update" method="post">
<?php
foreach($db->edit($_GET['id']) as $d){
?>
<table>
	<tr>
		<td>ISBN</td>
		<td>
			<input type="hidden" name="id" value="<?php echo $d['id'] ?>">
			<input type="text" name="isbn" value="<?php echo $d['isbn'] ?>">
		</td>
	</tr>
	<tr>
		<td>Nama</td>
		<td>
			<input type="hidden" name="id" value="<?php echo $d['id'] ?>">
			<input type="text" name="nama" value="<?php echo $d['nama'] ?>">
		</td>
	</tr>
	<tr>
		<td>Penulis</td>
		<td><input type="text" name="penulis" value="<?php echo $d['penulis'] ?>"></td>
	</tr>
	<tr>
		<td>Penerbit</td>
		<td><input type="text" name="penerbit" value="<?php echo $d['penerbit'] ?>"></td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" value="Simpan"></td>
	</tr>
</table>
<?php } ?>
</form>