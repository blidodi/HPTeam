<?php require "fungsi.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Ubah Data</title>
</head>
<body>
	<?php
	if(isset($_GET['id'])){
		include "config.php";

		if(isset($_POST['ubah']) && $_POST['ubah'] == 'Ubah') {
			

			$sql_data = "UPDATE `data`
						SET `id`='".$_POST['no']."',
							`nama`='".$_POST['nama']."',
							`nominal`='".$_POST['nominal']."',
							`kebutuhan`='".$_POST['kebutuhan']."'
							WHERE `id`='".$_POST['no']."'";

			$result = mysql_query($sql_data);



			$sql_status = "UPDATE `status`
							SET `nama`='".$_POST['status']."'
							WHERE `id_data`='".$_POST['no']."'";

			$result = mysql_query($sql_status);

			if(isset($result)) {
				header('location:index.php');
			} else {
				echo "Data Gagal DiUbah";
			}
		}

		$sql_status = "SELECT `data`.*, `status`.`nama` as `status` FROM `data` JOIN `status` ON 
								`data`.`id`=`status`.`id_data` WHERE `data`.`id`='".$_GET['id']."'";
		$result = mysql_query($sql_status);

		if(mysql_num_rows($result) > 0) {
			$row = mysql_fetch_array($result);
		}

	?>
	<h1>Form Kwitansi</h1><hr>
	<p><a class="p-color" href="index.php">Tabel Kwitansi</a> / Ubah Kwitansi</p>
	<form action="ubah.php?id=<?php echo $_GET['id'] ;?>" method="post">
		<label>No.</label>
		<input type="text" name="no" value="<?php echo check_post($row['id']);?>" />
		<label>Nama</label>
		<input type="text" name="nama" value="<?php echo check_post($row['nama']);?>" />
		<label>Nominal</label>
		<input type="text" name="nominal" value="<?php echo check_post($row['nominal']);?>" />
		<label>Kebutuhan</label>
		<input type="text" name="kebutuhan" value="<?php echo check_post($row['kebutuhan']);?>" />
		<label>Status</label>
		<select name="status">
			<?php 
				foreach ($status as $status) {
					if($status == check_post($row['status'])) {
					?>
						<option value="<?php echo $status; ?>" selected><?php echo $status ?>
						</option>
					<?php
					} else {
					?>
						<option value="<?php echo $status; ?>"><?php echo $status ?>
						</option>
					<?php
					}
				}
			?>
		</select>
		<br/>
		<input type="submit" name="ubah" value="Ubah">
	</form>
	<?php 
	} else {
		echo "Anda di Halaman yang Salah!!!";
	}
	?>
</body>
</html>