<?php
require "function.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>Ubah Informasi Buku</title>
</head>
<body>
	<h2>Ubah Informasi Buku</h2>
		<?php 
		if (isset($_GET['id'])) {
			include "koneksi.php";
				if (isset($_POST['ubah']) && $_POST['ubah'] == 'Ubah'){
					

					$sql = "UPDATE `buku` SET `isbn`='".$_POST['isbn']."',`judul`='".$_POST['judul']."',`penulis`='".$_POST['penulis']."',`penerbit`='".$_POST['penerbit']."',`tempat_terbit`='".$_POST['tempat_terbit']."',`tahun_terbit`='".$_POST['tahun_terbit']."' WHERE `id_data`='".$_POST['id']."'";
					$result = mysql_query($sql);

					if(isset($result)){
						echo "Data berhasil diubah. <a href=\"tabel.php\">Lihat Tabel</a>";
					} else {
						echo "Data Tidak berhasil diubah !!!";
					}
				}

				$sql = "SELECT * FROM `buku` WHERE `buku`.`id_buku`='".$_GET['id']."'";


				$result = mysql_query($sql);


				if (mysql_num_rows($result) > 0) {
					$row = mysql_fetch_array($result);

				?>

				<form action="edit.php?id=<?php echo $_GET['id'] ?>" method="post">
					<input type="hidden" name="id" value="<?php echo check_post($row['id_buku']) ?>">

					<label>ISBN : </label>
					<input type="text" name="isbn" value="<?php echo check_post($row['isbn']) ?>"><br/>

					<label>Judul : </label>
					<input type="text" name="judul" value="<?php echo check_post($row['judul']) ?>"><br/>

					<label>Penulis : </label>
					<input type="text" name="penulis" value="<?php echo check_post($row['penulis']);?>"><br/>

					<label>Penerbit : </label>
					<input type="text" name="penerbit" value="<?php echo check_post($row['penerbit']);?>"><br/>

					<label>Tempat Terbit : </label>
					<input type="text" name="tempat_terbit" value="<?php echo check_post($row['tempat_terbit']);?>"><br/>

					<label>Tahun Terbit : </label>
					<input type="text" name="tahun_terbit" value="<?php echo check_post($row['tahun_terbit']);?>"><br/>

					<input class="button_hijau" type="submit" name="ubah" value="Ubah">
				</form>
			<?php
				}
		}else{
			echo "Halaman tidak bisa diakses !!!";
		}
		?>
</body>
</html>