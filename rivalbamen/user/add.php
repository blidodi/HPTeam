<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Tambah User</title>
</head>
<body>
<div id="container">
    <div id="header">
		<h1>Form User</h1>
	</div>
</div>
	<hr>
	<p><a class="p-color" href="index.php">Tabel User</a> / Tambah User</p>
	<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
		<label>Nama</label>
		<input type="text" name="nama" />
		<label>Username</label>
		<input type="text" name="username" />
		<label>Password</label>
		<input type="password" name="password" />
		<label>Status</label>
		<select name="role">
			<option value="">--Pilih--</option>
			<option value="1">Admin</option>
			<option value="2">User</option>
		</select>
		<br/>
		<input type="submit" name="simpan" value="Simpan">
	</form>

	<?php
		if(isset($_POST['simpan']) && $_POST['simpan'] == 'Simpan') {
			include "koneksi.php";

			$sql_user = "INSERT INTO `user` (`nama`, `username`, `password`, `role`)
								VALUES ('".$_POST['nama']."',
										'".$_POST['username']."',
										'".$_POST['password']."',
										'".$_POST['role']."')";
			$result = mysql_query($sql_user);
			
			/*$id = mysql_insert_id();
			$sql_status = "INSERT INTO `status` (`id_data`, `nama`)
								VALUES ('".$id."',
										'".$_POST['status']."')";
			$result = mysql_query($sql_status);
			*/

			if(isset($result)) {
				header('location:index.php');
			} else {
				echo "Data Gagal Disimpan";
			} 
		}

	?>
<div id="footer">
	<center>Copyright 2017 Designed by Rivalbamen</center>
</div>
</body>
</html>