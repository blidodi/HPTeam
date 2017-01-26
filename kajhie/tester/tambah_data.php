<!DOCTYPE html>
<html>
	<head>
		<title>Tambah Data</title>
	</head>
	
	<body>
	<h1>Tambah Data </h1>
		<?php 
		if (isset($_POST['simpan']) && $_POST['simpan'] == 'Simpan'){
			include "koneksi.php";

			$sql = "INSERT INTO `data` (`dari`,`nominal`,`kebutuhan`)
					VALUES ('".$_POST['nama']."','".$_POST['nominal']."','".$_POST['kebutuhan']."')";
			// echo $sql;
			// die();
			$result = mysql_query($sql);

			$id = mysql_insert_id();

			$sql = "INSERT INTO `status`(`id_status`,`nama_status`) VALUES ('".$id."','".$_POST['status']."')";

			$result = mysql_query($sql);

			if($result){
				echo "Data berhasil disimpan. <a href=\"tabel.php\">Lihat Tabel</a>";
			} else {
				echo "Data Tidak berhasil disimpan !!!";
			}
		}

		?>

		<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
			<label>Nama : </label>
			<input type="text" name="nama"><br/>
			<label>Nominal : </label>
			<input type="text" name="nominal"><br/>
			<label>Kebutuhan : </label>
			<input type="text" name="kebutuhan"><br/>	
			<select name="status">
				<option value=" ">Pilih Status</option>
				<option value="Lunas">Lunas</option>
				<option value="Belum Lunas">Belum Lunas</option>
			</select><br/>
			<input class="button_hijau" type="submit" name="simpan" value="Simpan">
		</form>
	</body>
</html>