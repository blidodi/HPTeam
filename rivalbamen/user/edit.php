<?php require "proses.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Ubah User</title>
</head>
<body>
	<?php
	if(isset($_GET['id'])){
		include "koneksi.php";

		/*$sql = "SELECT `data`.*, `status`.`nama` as `status` FROM `data` JOIN `status` ON 
								`data`.`id`=`status`.`id_data` WHERE `data`.`id`='".$_GET['id']."'";*/
		$sql = "SELECT user.id, user.nama, user.username, user.password, user_role.role 
				FROM user, user_role 
				WHERE user.role=user_role.id_user AND user.id='".$_GET['id']."'"; 
		$result = mysql_query($sql);

		if(mysql_num_rows($result) > 0) {
			$row = mysql_fetch_array($result);
		}
	?>
	<h1>Form User</h1><hr>
	<p><a class="p-color" href="index.php">Tabel User</a> / Ubah User</p>
	<form action="edit.php?id=<?php echo $_GET['id'] ;?>" method="post">
		<input type="hidden" name="id" value="<?php echo check_post($row['id']);?>" />
		<label>Nama</label>
		<input type="text" name="nama" value="<?php echo check_post($row['nama']);?>" />
		<label>Username</label>
		<input type="text" name="username" value="<?php echo check_post($row['username']);?>" />
		<label>Password</label>
		<input type="password" name="password" value="<?php echo check_post($row['password']);?>" />
		<label>Hak Akses</label>
		<select name="role">
			<?php 
				foreach ($status as $status) {
					if($status == check_post($row['role'])) {
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
		if(isset($_POST['ubah']) && $_POST['ubah'] == 'Ubah') {		
			$sql_user = "UPDATE `user`
						SET `nama`='".$_POST['nama']."',
							`username`='".$_POST['username']."',
							`password`='".$_POST['password']."',
							`role`='".$_POST['role']."'
							WHERE `id`='".$_POST['id']."'";

			$result = mysql_query($sql_user);

			/*$sql_status = "UPDATE `status`
							SET `nama`='".$_POST['status']."'
							WHERE `id_user`='".$_POST['no']."'";

			$result = mysql_query($sql_status); */

			if(isset($result)) {
				header('location:index.php');
			} else {
				echo "Data Gagal DiUbah";
			}
		}

	} else {
		echo "Anda di Halaman yang Salah!!!";
	}
	?>
</body>
</html>