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
		$sql = "SELECT * FROM user WHERE user.id='".$_GET['id']."'"; 
		$result = mysql_query($sql);

		if(mysql_num_rows($result) > 0) {
			$row = mysql_fetch_array($result);
		}
	?>
	<div id="container">
	    <div id="header">
			<h1>Form User</h1>
		</div>
	</div>
	<hr>
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
			<option value="">--Pilih--</option>
			<?php 
				foreach($role as $key => $value) {
					if($key == check_post($row['role'])) {
					?>
						<option value="<?php echo $key; ?>" selected><?php echo $value?>
						</option>
					<?php
					} else {
					?>
						<option value="<?php echo $key; ?>"><?php echo $value ?>
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
							`role` = '".$_POST['role']."'
							WHERE `id`='".$_POST['id']."'";

			$result = mysql_query($sql_user);
			
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
	<div id="footer">
		<center>Copyright &copy; 2017 Designed by Rivalbamen</center>
	</div>
</body>
</html>