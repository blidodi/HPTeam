<?php require "fungsi.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Ubah Data</title>
		<style>
			* {
				font: normal 13px/1.3 Calibri;
			}
			h1 {
				font-size: 24px;
				color: orange;
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
	<h1>Ubah Data</h1>
	<?php
		if(isset($_GET['id'])) {
			include "config.php";

			if(isset($_POST['ubah']) && $_POST['ubah'] == 'Ubah') {

				$sql_data = "UPDATE `user` SET 
							`nama`='".$_POST['nama']."',
							`username`='".$_POST['username']."',
							`password`='".$_POST['password']."'
							WHERE `ID`='".$_POST['id']."'";

				$result = mysql_query($sql_data);

				$sql_status = "UPDATE `user_role` SET
							`user_role`='".$_POST['role']."'
							WHERE `ID`='".$_POST['id']."'";

				$result = mysql_query($sql_status);

			if(isset($result)) {
				echo "Data Berhasil Diubah. <a href=\"table.php\">Lihat Hasilnya</a>";
			} else {
				echo "Data Gagal Diubah.";
			}		
		}

		$sql_status = "SELECT `user`.*, `user_role`.`role` as `user_role` FROM `user` JOIN `user_role` ON `user`.`ID`=`user_role`.`ID` WHERE `user`.`ID`='".$_GET['id']."'";

		$result = mysql_query($sql_status);

		if (mysql_num_rows($result) > 0) {
			$row = mysql_fetch_array($result);
	?>
	<form action="ubah.php?id=<?php echo $_GET['id'] ?>" method="post">
		<label>Nama :</label>
		<input type="text" name="nama" value="<?php echo check_post($row['nama']) ?>"/>
		<input type="hidden" name="id" value="<?php echo check_post($row['ID']) ?>"/>
		<label>Username :</label>
		<input type="text" name="username" value="<?php echo check_post($row['username']) ?>"/>
		<label>Password :</label>
		<input type="text" name="password" value="<?php echo check_post($row['password']) ?>"/>
		<select name="role">
			<?php
				foreach($role as $role) {
					if($role == check_post($row['role'])) {
						?>
						<option value="<?php echo $user_role ?>" selected><?php echo $role ?></option>
						<?php
					} else {
						?>
						<option value="<?php echo $user_role ?>"><?php echo $role ?></option>
						<?php	
					}
				}
			?>
		</select>
		<input class ="button button2" type="submit" name="ubah" value="Ubah" />
		<a class ="button button2" href="table.php">Batal</a>		
	</form>
	<?php }
	} else {
		echo "Restricted Area";
	} ?>
</body>
</html>