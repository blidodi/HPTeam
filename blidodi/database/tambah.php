<!DOCTYPE>
<html
	<head>
		<title>Tambah Data</title>
		<style type="text/css">
			* {
				font: normal 13px/1.3 Calibri;
			}
			h1 {
				font-size: 24px;
				color: blue;
			}
			input, select {
				display: block;
				padding: 10px;
				margin: 10px;
			}
		</style>
	</head>
	<body>
		<h1>Tambah</h1>
		<?php 
			if(isset($_POST['simpan']) && $_POST['simpan'] == 'Simpan') {
				include "config.php";

				$sql_data = "INSERT INTO `data` (`nama`, `nominal`, `kebutuhan`)
									VALUES ('".$_POST['nama']."', 
											'".$_POST['nominal']."',
											'".$_POST['kebutuhan']."')";

				$result = mysql_query($sql_data);

				$id_data = mysql_insert_id();

				$sql_status = "INSERT INTO `status` (`id_data`, `nama`)
									VALUES	('".$id_data."',
											'".$_POST['status']."')";

				$result = mysql_query($sql_status);


				if(isset($result)) {
					echo "Data Berhasil Disimpan. <a href=\"table.php\">Lihat Hasilnya</a>";
				} else {
					echo "Data Gagal Disimpan.";
				}
			}
		?>
		<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
			<label>Nama</label>
			<input type="text" name="nama"/>
			<label>Nominal</label>
			<input type="text" name="nominal"/>
			<label>Kebutuhan</label>
			<input type="text" name="kebutuhan"/>
			<select name="status">
				<option value="">Pilih</option>
				<option value="Lunas">Lunas</option>
				<option value="Kredit">Kredit</option>
			</select>
			<input type="submit" name="simpan" value="Simpan"/>
		</form>
	</body>
</html>