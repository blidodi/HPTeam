<?php require "function.php"; ?>

<!DOCTYPE >
<html>
	<head>
	<title>Operasi Ubah</title>
	</head>
<body>
		<?php
			if(isset($_GET['id'])){
				include "koneksi.php"; //mengkonfigurasi dari koneksi.php untuk difungsikan di database

				if(isset($_POST['ubah']) && $_POST['ubah'] == 'Ubah'){ 
				//isset fungsinya untuk kita jika menekan tombol maka data akan dioperasi.

				$sql_data = "UPDATE `data` SET
								`nama`='".$_POST['nama']."', 
								`nominal`='".$_POST['nominal']."',
								`kebutuhan`='".$_POST['kebutuhan']."'
								WHERE `id`='".$_POST['id']."'";

				$hasil = mysql_query($sql_data); //mengeksekusi hasil dari script sql yang diidentifikasi


				$sql_status = "UPDATE `status` SET
								`status`='".$_POST['status']."'
								 WHERE `id_data`='".$_POST['id']."'";

				$hasil = mysql_query($sql_status); //variabel $hasil sama kyak yg diatas tetapi yg dieksekusi adalah yg bag.terakhir variabel dr $sql table status. dan $hasil yang diatas itu sudah overwrite (ditumpuk)

				if(isset($hasil)){
					echo "Data Berhasil Diubah <a href=\"koneksi_kwitansi.php\">Lihat Table</a>";
				} else {
					echo "Data Gagal Diubah";
				}
			}

			$sql_status = "SELECT `data`.*, `status`.`status` as `status` FROM `data` JOIN `status` ON `data`.`id`=`status`.`id_data` WHERE `data`.`id`='".$_GET['id']."'";

			$hasil = mysql_query($sql_status);

			if(mysql_num_rows($hasil) > 0){
				$row = mysql_fetch_array($hasil);
			?>
				<form action="ubah.php?id=<?php echo $_GET['id'] ?>" method="post" class="field"> 
					<table align="center" class="back">
						<tr>
							<td>Nama</td>
							<td><input type="text" name="nama" value="<?php echo cek_post($row['nama']) ?>" /></td>
							<td><input type="hidden" name="id" value="<?php echo cek_post($row['id']) ?>" /></td>
						</tr>
						<tr>
							<td>Nominal</td>
							<td><input type="text" name="nominal" value="<?php echo cek_post($row['nominal']) ?>" /></td>
						</tr>
						<tr>
							<td>Kebutuhan</td>
							<td><input type="text" name="kebutuhan" value="<?php echo cek_post($row['kebutuhan']) ?>" /></td>
						</tr>
						<tr>
							<td>
								<select name="status">
									<?php 
										foreach ($status as $status){
											if($status == cek_post($row['status'])){
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

