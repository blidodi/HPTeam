<?php require "function.php"; ?>

<!DOCTYPE >
<html>
	<head>
	<title>Form Update Data</title>
	<link rel="stylesheet" href="styleLogin.css">
	</head>
<body>
		<?php
			if(isset($_GET['id'])){
				include "koneksi.php"; //mengkonfigurasi dari koneksi.php untuk difungsikan di database

				if(isset($_POST['ubah']) && $_POST['ubah'] == 'Update'){ 
				//isset fungsinya untuk kita jika menekan tombol maka data akan dioperasi.

				$sql_user = "UPDATE `user` SET
								`nama_user`='".$_POST['nama_user']."', 
								`username`='".$_POST['username']."',
								`password`='".$_POST['password']."'
								WHERE `id_user`='".$_POST['id_user']."'";

				$hasil = mysql_query($sql_user); //mengeksekusi hasil dari script sql yang diidentifikasi

				// echo $sql_data;
				// die();


				$sql_role = "UPDATE `user_role` SET
								`status`='".$_POST['status']."'
								 WHERE `id`='".$_POST['id_user']."'";

				$hasil = mysql_query($sql_role); //variabel $hasil sama kyak yg diatas tetapi yg dieksekusi adalah yg bag.terakhir variabel dr $sql table status. dan $hasil yang diatas itu sudah overwrite (ditumpuk)

				// if(isset($hasil)){
				// 	echo "Data Berhasil Diubah <a href=\"tableAkun.php\">Lihat Table</a>";
				// } else {
				// 	echo "Data Gagal Diubah";
				// }
			}

			$sql_role = "SELECT `user`.*, `user_role`.`status` as `status` FROM `user` JOIN `user_role` ON `user`.`id_user`=`user_role`.`id` WHERE `user`.`id_user`='".$_GET['id']."'";

			$hasil = mysql_query($sql_role);

			if(mysql_num_rows($hasil) > 0){
				$row = mysql_fetch_array($hasil);
			?>

		<div class="body"></div>
		<div class="grad"></div>
		<div class="header">
			<div>Update<span>Akun</span></div>
		</div>
			<br>
				<form action="update.php?id=<?php echo $_GET['id'] ?>" method="post" class="field"> 
					<div class="update">
					<div class="field1">
						<label>Nama Lengkap</label> 
						<input type="text" placeholder="nama lengkap" name="nama_user" value="<?php echo cek_tampil($row['nama_user']) ?>" class="fieldinput1"/>
					</div>
						<input type="hidden" name="id_user" value="<?php echo cek_tampil($row['id_user']) ?>" />
					<div class="field1">
						<label>Username</label><br> 
						<input type="text" placeholder="username" name="username" value="<?php echo cek_tampil($row['username']) ?>" class="fieldinput2"/>
					</div>
					<div class="field1">
						<label>Password</label><br> 
						<input type="password" placeholder="password" name="password" value="<?php echo cek_tampil($row['password']) ?>" class="fieldinput3"/>
					</div>
						<select name="status" class="selectUpdate">
				          <?php
				          	foreach ($status as $status){
								if($status == cek_tampil($row['status'])){
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
		        		</select><br>
		        		<input type="submit" name="ubah" value="Update" class="button"><br>
		        		<a href="tableAkun.php" class="links1">View Data</a>
						</div>
						</form>
						<?php } 
						} else {
							echo "Restricted Area";
							}
						?>
</body>
</html>

