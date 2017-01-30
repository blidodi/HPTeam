<?php require "proses.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
			<h1>Tabel User</h1>
		</div>
		<ul>
			<li><a href="dashboard.php"><i class="fa fa-home"></i> Home</a></li>
			<li><a class="active" href="user-table.php"><i class="fa fa-users"></i> User</a></li>
			<li><a href="kwitansi-table.php"><i class="fa fa-credit-card-alt"></i> Kwitansi</a></li>
			<li style="float:right"><a href="logout.php"><i class="fa fa-sign-out"> </i> Logout</a></li>
		</ul>
		<div class=form>
		<p><a class="p-color" href="user-table.php">Tabel User</a> / Ubah User</p>
		<form action="user-edit.php?id=<?php echo $_GET['id'] ;?>" method="post">
			<input type="hidden" name="id" value="<?php echo check_post($row['id']);?>" />
			<label>Nama :</label>
			<input type="text" name="nama" value="<?php echo check_post($row['nama']);?>" />
			<label>Username :</label>
			<input type="text" name="username" value="<?php echo check_post($row['username']);?>" />
			<label>Password :</label>
			<input type="password" name="password" value="<?php echo check_post($row['password']);?>" />
			<label>Hak Akses :</label>
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
		</div>
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
				header('location:user-table.php');
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
</div>
</body>
</html>