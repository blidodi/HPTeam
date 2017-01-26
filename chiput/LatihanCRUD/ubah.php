<?php require "fungsi.php"; ?>

<!DOCTYPE >
<html>
	<head>
	<title>Operasi Ubah</title>
	</head>
<body>
		<?php
			if(isset($_GET['id'])){
				include "connection.php"; //mengkonfigurasi dari koneksi.php untuk difungsikan di database

				if(isset($_POST['ubah']) && $_POST['ubah'] == 'Ubah'){ 
				//isset fungsinya untuk kita jika menekan tombol maka data akan dioperasi.

				$sql_data = "UPDATE `user` SET
								`nama_user`='".$_POST['nama_user']."', 
								`username`='".$_POST['username']."',
								`password`='".$_POST['password']."'
								WHERE `id_user`='".$_POST['id_user']."'";

				$hasil = mysql_query($sql_data); //mengeksekusi hasil dari script sql yang diidentifikasi


				$sql_status = "UPDATE `user_role` SET
								`status`='".$_POST['status']."'
								 WHERE `id`='".$_POST['id']."'";

				$hasil = mysql_query($sql_status); //variabel $hasil sama kyak yg diatas tetapi yg dieksekusi adalah yg bag.terakhir variabel dr $sql table status. dan $hasil yang diatas itu sudah overwrite (ditumpuk)

				if(isset($hasil)){
					echo "Data Berhasil Diubah <a href=\"tampildata.php\">Lihat Table</a>";
				} else {
					echo "Data Gagal Diubah";
				}
			}

			$sql_status = "SELECT `user`.*, `user_role`.`status` as `status` FROM `user` JOIN `user_role` ON `user`.`id`=`status`.`id` WHERE `user`.`id_user`='".$_GET['id']."'";

			$hasil = mysql_query($sql_status);

			// echo $sql_status;
			// die();

			if(mysql_num_rows($hasil) > 0){
				$row = mysql_fetch_array($hasil);
			?>
				<form action="ubah.php?id=<?php echo $_GET['id'] ?>" method="post" class="field"> 
					<table align="center" class="back">
						<tr>
							<td>Nama Lengkap</td>
							<td><input type="text" name="nama_user" value="<?php echo cek_tampil($row['nama_user']) ?>" /></td>
							<td><input type="hidden" name="id_user" value="<?php echo cek_tampil($row['id_user']) ?>" /></td>
						</tr>
						<tr>
							<td>Username</td>
							<td><input type="text" name="username" value="<?php echo cek_tampil($row['username']) ?>" /></td>
						</tr>
						<tr>
							<td>Password</td>
							<td><input type="text" name="password" value="<?php echo cek_tampil($row['password']) ?>" /></td>
						</tr>
						<tr>
							<td>
								<select name="status">
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
									</select>
								</td>
							</tr>
							</table>
							<center><input type="submit" name="ubah" value="Ubah"></center>
							
						</form>
						<?php } 
						} else {
							echo "Restricted Area";
							}
						?>
</body>
</html>

