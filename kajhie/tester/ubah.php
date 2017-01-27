<?php
	require "fungsi.php";
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Ubah Data</title>
	</head>
	
	<body>
	<h1>Ubah</h1>
		<?php 
		if (isset($_GET['id'])) {
			include "koneksi.php";
				if (isset($_POST['ubah']) && $_POST['ubah'] == 'Ubah'){
					

					$sql = "UPDATE `data` SET `dari`='".$_POST['nama']."',`nominal`='".$_POST['nominal']."',`kebutuhan`='".$_POST['kebutuhan']."' WHERE `no`='".$_POST['id']."'";
					$result = mysql_query($sql);

					$sql_status = "UPDATE `status` SET `nama_status`='".$_POST['status']."' WHERE `id_status`='".$_POST['id']."'";
					

					$result = mysql_query($sql_status);

					if(isset($result)){
						echo "Data berhasil diubah. <a href=\"tabel.php\">Lihat Tabel</a>";
					} else {
						echo "Data Tidak berhasil diubah !!!";
					}
				}

				$sql_status = "SELECT `data`.*, `status`.`nama_status` as `status` FROM `data` JOIN `status` ON `data`.`no`=`status`.`id_status` WHERE `data`.`no`='".$_GET['id']."'";


				$result = mysql_query($sql_status);


				if (mysql_num_rows($result) > 0) {
					$row = mysql_fetch_array($result);

				?>

				<form action="ubah.php?id=<?php echo $_GET['id'] ?>" method="post">
					<input type="hidden" name="id" value="<?php echo check_post($row['no']) ?>">
					<label>Nama : </label>
					<input type="text" name="nama" value="<?php echo check_post($row['dari']) ?>"><br/>
					<label>Nominal : </label>
					<input type="text" name="nominal" value="<?php echo check_post($row['nominal']) ?>"><br/>
					<label>Kebutuhan : </label>
					<input type="text" name="kebutuhan" value="<?php echo check_post($row['kebutuhan']);     ?>"><br/>	
					<select name="status">
						<?php
						foreach ($status as $status) {
							if ($status == check_post($row['status'])) {
							?>
							<option value="<?php echo $status ?>" selected><?php echo $status ?></option>
							<?php
						} else {
							?>
							<option value="<?php echo $status ?>"><?php echo $status ?></option>
							<?php
						}
					}
						?>
					</select><br/>
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