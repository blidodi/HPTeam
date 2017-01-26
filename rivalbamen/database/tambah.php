<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Tambah Data</title>
</head>
<body>
	<?php
		if(isset($_POST['simpan']) && $_POST['simpan'] == 'Simpan') {
			include "config.php";

			$sql = "INSERT INTO `data` (`id`, `nama`, `nominal`, `kebutuhan`)
								VALUES ('".$_POST['no']."',
										'".$_POST['nama']."',
										'".$_POST['nominal']."',
										'".$_POST['kebutuhan']."')";
			$result = mysql_query($sql);
			$id = mysql_insert_id();
			$sql = "INSERT INTO `status` (`id_data`, `nama`)
								VALUES ('".$id."',
										'".$_POST['status']."')";
			$result = mysql_query($sql);

			if($result) {
				header('location:index.php');
			} else {
				echo "Data Gagal Disimpan";
			}
		}

	?>
	<h1>Form Kwitansi</h1><hr>
	<p><a class="p-color" href="index.php">Tabel Kwitansi</a> / Tambah Kwitansi</p>
	<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
		<label>No.</label>
		<input type="text" name="no" />
		<label>Nama</label>
		<input type="text" name="nama" />
		<label>Nominal</label>
		<input type="text" name="nominal" />
		<label>Kebutuhan</label>
		<input type="text" name="kebutuhan" />
		<label>Status</label>
		<select name="status">
			<option value="">--Pilih--</option>
			<option value="tunai">tunai</option>
			<option value="kredit">kredit</option>
		</select>
		<br/>
		<input type="submit" name="simpan" value="Simpan">
	</form>

</body>
</html>