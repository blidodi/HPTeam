<?php 
include '../database.php';
$db = new database();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="../css/crud.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>Edit Buku</title>
</head>
<body>
    <div id="header">
		<h1>Edit Buku</h1>
	</div>
		<form action="../proses.php?aksi=update_buku" method="post">
			<?php
				foreach($db->edit_buku($_GET['id']) as $d){
			?>
				<table>
					<tr>
						<td>Kode Buku</td>
						<td>
							<input type="hidden" name="id" value="<?php echo $d['id'] ?>">
							<input type="text" name="kode_buku" value="<?php echo $d['kode_buku'] ?>">
						</td>
					</tr>
					<tr>
						<td>ISBN</td>
						<td><input type="text" name="isbn" value="<?php echo $d['isbn'] ?>"></td>
					</tr>
					<tr>
						<td>Judul</td>
						<td><input type="text" name="judul" value="<?php echo $d['judul'] ?>"></td>
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
						<td><input class="button button2" type="submit" value="Simpan"></td>
					</tr>
				</table>
			<?php } ?>
		</form>
</body>
</html>	