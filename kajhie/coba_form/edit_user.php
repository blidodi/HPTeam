<?php
	require "fungsi.php";
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Edit Data</title>
	</head>
	
	<body>
	<h1>Edit</h1>
		<?php 
		if (isset($_GET['id'])) {
			include "koneksi.php";
				if (isset($_POST['edit']) && $_POST['edit'] == 'Edit'){
					

					$sql = "UPDATE `user` SET `nama_user`='".$_POST['nama']."',`username`='".$_POST['username']."',`pass`='".$_POST['password']."' WHERE `id_user`='".$_POST['id']."'";
					$result = mysql_query($sql);

					$sql_status = "UPDATE `level` SET `level_user`='".$_POST['level_user']."' WHERE `id_level_user`='".$_POST['id']."'";
					
					$result = mysql_query($sql_status);

					if(isset($result)){
						echo "Data berhasil diubah. <a href=\"tabel_user.php\">Lihat Tabel</a>";
					} else {
						echo "Data Tidak berhasil diubah !!!";
					}
				}

				// $sql_status = "SELECT * FROM `user` WHERE `id_user`='".$_GET['id']."'";	
				$sql_status = "SELECT `user`.*, `level`.`level_user` as `level` FROM `user` JOIN `level` ON `user`.`id_user`=`level`.`id_level_user` WHERE `user`.`id_user`='".$_GET['id']."'";


				$result = mysql_query($sql_status);


				if (mysql_num_rows($result) > 0) {
					$row = mysql_fetch_array($result);

				?>

				<form action="edit_user.php?id=<?php echo $_GET['id'] ?>" method="post">
					<input type="hidden" name="id" value="<?php echo check_post($row['id_user']) ?>">
					<label>Nama : </label>
					<input type="text" name="nama" value="<?php echo check_post($row['nama_user']) ?>"><br/>
					<label>Username : </label>
					<input type="text" name="username" value="<?php echo check_post($row['username']) ?>"><br/>
					<label>Password : </label>
					<input type="password" name="password" value="<?php check_post($row['pass']); ?>" ><br/>
					<select name="status">
						<?php
						foreach ($data as $key => $value) {
							if ($key == check_post($row['status'])) {
							?>
							<option value="<?php echo $key ?>" selected><?php echo $value ?></option>
							<?php
						 } else {
							?>
							<option value="<?php echo $key ?>"><?php echo $value ?></option>
							<?php
						}
					}
						?>
					</select><br/>
					<input class="button_hijau" type="submit" name="edit" value="Edit">
				</form>
			<?php
				}
		}else{
			echo "Halaman tidak bisa diakses !!!";
		}
		?>
	</body>
</html>