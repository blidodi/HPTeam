<?php 
include '../database.php';
$db = new database();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Edit Pengembalian</title>
		<link rel="stylesheet" type="text/css" href="../css/crud.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div id="header">
		<h1>Edit Penyewa</h1>
	</div>
		<form action="../proses.php?aksi=update_pengembalian" method="post">
			<?php
				foreach($db->edit_pengembalian($_GET['id']) as $d){
			?>
				<table>
					<tr>
						<td>Kode Pengembalian</td>
						<td>
							<input type="hidden" name="id" value="<?php echo $d['id'] ?>">
							<input type="text" name="kode_kembali" value="<?php echo $d['kode_kembali'] ?>">
						</td>
					</tr>
					<tr>
						<td>Kode User</td>
						<td><input type="text" name="kode_user" value="<?php echo $d['kode_user'] ?>"></td>
					</tr>
					<tr>
						<td>Kode Buku</td>
						<td><input type="text" name="kode_buku" value="<?php echo $d['kode_buku'] ?>"></td>
					</tr>
					<tr>
						<td>Kode Member</td>
						<td><input type="text" name="kode_member" value="<?php echo $d['kode_member'] ?>"></td>
					</tr>
					<tr>
						<td>Total Denda</td>
						<td><input type="text" name="total_denda" value="<?php echo $d['total_denda'] ?>"></td>
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