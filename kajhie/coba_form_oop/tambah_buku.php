<!DOCTYPE html>
<html>
<head>
	<title>Tambah Daftar Buku</title>
</head>
<body>
	<h1>Tambah Daftar Buku</h1>
		<?php 
		if (isset($_POST['simpan']) && $_POST['simpan'] == 'Simpan'){
			include "koneksi.php";

			$sql = "INSERT INTO `buku` (`isbn`,`judul`,`penulis`,`penerbit`,`tempat_terbit`,`tahun_terbit`) VALUES ('".$_POST['isbn']."','".$_POST['judul']."','".$_POST['penulis']."','".$_POST['penerbit']."','".$_POST['tempat']."','".$_POST['tahun']."')";

			$result = mysql_query($sql);

			if($result){
				echo "Data berhasil disimpan. <a href=\"tabel.php\">Lihat Tabel</a>";
			} else {
				echo "Data Tidak berhasil disimpan !!!";
			}
		}

		?>

		<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
			<label>ISBN : </label>
			<input type="text" name="isbn"><br/>
			<label>Judul : </label>
			<input type="text" name="judul"><br/>
			<label>Penuis : </label>
			<input type="text" name="penulis"><br/>	
			<label>Penerbit : </label>
			<input type="text" name="penerbit"><br/>
			<label>Tempat Terbit : </label>
			<input type="text" name="tempat"><br/>
			<label>Tahun Terbit : </label>
			<input type="text" name="tahun"><br/>

			<input class="button_hijau" type="submit" name="simpan" value="Simpan">
		</form>
</body>
</html>