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
	<title>Edit Member</title>
</head>
<body>
    <div id="header">
		<h1>Edit Member</h1>
	</div>
		<form action="../proses.php?aksi=update_member" method="post">
			<?php
				foreach($db->edit_member($_GET['id']) as $d){
			?>
				<table>
					<tr>
						<td>Kode Member</td>
						<td>
							<input type="hidden" name="id" value="<?php echo $d['id'] ?>">
							<input type="text" name="kode_member" value="<?php echo $d['kode_member'] ?>">
						</td>
					</tr>
					<tr>
						<td>Nama</td>
						<td><input type="text" name="nama" value="<?php echo $d['nama'] ?>"></td>
					</tr>
					<tr>
						<td>Alamat</td>
						<td><input type="text" name="alamat" value="<?php echo $d['alamat'] ?>"></td>
					</tr>
					<tr>
						<td>Foto</td>
						<td><input type="file" name="foto" value="<?php echo $d['foto'] ?>"></td>
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