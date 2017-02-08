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
	<title>Edit Kwitansi</title>
</head>
<body>
    <div id="header">
		<h1>Edit Kwitansi</h1>
	</div>
		<form action="../proses.php?aksi=update_kwitansi" method="post">
			<?php
				foreach($db->edit_kwitansi($_GET['id']) as $d){
			?>
				<table>
					<tr>
						<td>No.</td>
						<td>
							<input type="hidden" name="id" value="<?php echo $d['id'] ?>">
							<input type="text" name="no" value="<?php echo $d['no'] ?>">
						</td>
					</tr>
					<tr>
						<td>Nama</td>
						<td><input type="text" name="nama" value="<?php echo $d['nama'] ?>"></td>
					</tr>
					<tr>
						<td>Uang Sejumlah</td>
						<td><input type="text" name="uang_sejumlah" value="<?php echo $d['uang_sejumlah'] ?>"></td>
					</tr>
					<tr>
						<td>Untuk Pembayaran</td>
						<td><input type="text" name="untuk_pembayaran" value="<?php echo $d['untuk_pembayaran'] ?>"></td>
					</tr>
					<tr>
						<td>Status</td>
						<td><input type="text" name="status" value="<?php echo $d['status'] ?>"></td>
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