<?php
	require "fungsi.php";
?>
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
			// $acak= "Muhammadmirza25atauKajhieMouslieh134";
			// $pass= md5($acak.md5($_POST['password'])).md5($acak);
			$sql = "INSERT INTO `user` (`nama_user`,`username`,`pass`,`level`) VALUES ('".$_POST['nama']."','".$_POST['username']."','".md5($_POST['password'])."','".$_POST['status']."')";

			$result = mysql_query($sql);

			// $id = mysql_insert_id();

			// $sql = "INSERT INTO `level`(`id_level_user`,`level_user`) VALUES ('".$id."','".$_POST['status']."')";

			// $result = mysql_query($sql);

			if($result){
				echo "Data berhasil disimpan. <a href=\"tabel_user.php\">Lihat Tabel</a>";
			} else {
				echo "Data Tidak berhasil disimpan !!!";
			}
		}

		?>

		<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
			<label>Nama : </label>
			<input type="text" name="nama"><br/>
			<label>Username : </label>
			<input type="text" name="username"><br/>
			<label>Password : </label>
			<input type="text" name="password"><br/>	
			<select name="status">
						<?php
						foreach ($data as $key => $value) {
							?>
							<option value="<?php echo $key ?>"><?php echo $value ?></option>
							<?php
						
					}
						?>
					</select><br/>
			<input class="button_hijau" type="submit" name="simpan" value="Simpan">
		</form>
	</body>
</html>