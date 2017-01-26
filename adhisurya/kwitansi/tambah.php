<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data</title>
		<style>
			* {
				font: normal 13px/1.3 Calibri;
			}
			h1 {
				font-size: 24px;
				color: blue;
			}
			input, select {
				display: block;
				padding: 10px;
				margin: 10px;
			}
			.button {
			    
			    border: none;
			    color: white;
			    padding: 10px 20px;
			    text-align: center;
			    text-decoration: none;
			    display: inline-block;
			    font-size: 16px;
			    margin: 4px 2px;
			    cursor: pointer;
			}
			.button1 {background-color: blue;} /*Blue */
			.button2 {background-color: orange;} /* Orange */
			.button3 {background-color: red;} /* Red */ 
		</style>
</head>
<body>
	<h1>Tambah Data</h1>
	<?php
		if(isset($_POST['simpan']) && $_POST['simpan'] == 'Simpan') {
			include "config.php";

			$sql = "INSERT INTO `user` (`nama`, `username`, `password`) 
					VALUES ('".$_POST['nama']."', 
							'".$_POST['username']."', 
							'".$_POST['password']."')";

			$result = mysql_query($sql);

			$id = mysql_insert_id();

			$sql = "INSERT INTO `user_role` (`ID`, `role`) 
					VALUES ('".$id."', '".$_POST['role']."')";

			$result = mysql_query($sql);

			if($result) {
				echo "Data Berhasil Disimpan. <a href=\"table.php\">Lihat Hasilnya</a>";
			} else {
				echo "Data Gagal Disimpan.";
			}		
		}
	?>
	<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
		<label>Nama :</label>
		<input type="text" name="nama" />
		<label>Username :</label>
		<input type="text" name="username" />
		<label>Password :</label>
		<input type="text" name="password" />
		<select name="role">
			<option value="">Pilih</option>
			<option value="Admin">Admin</option>
			<option value="User">User</option>
		</select>
		<input class ="button button1" type="submit" name="simpan" value="Simpan" />
		<a class ="button button1" href="table.php">Batal</a>			
	</form>
</body>
</html>