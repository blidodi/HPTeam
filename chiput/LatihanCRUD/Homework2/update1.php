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

				// if(isset($hasil)){
				// 	echo "Data Berhasil Diubah <a href=\"tableKwitansi.php\">Lihat Table</a>";
				// } else {
				// 	echo "Data Gagal Diubah";
				// }
			}

			$sql_status = "SELECT `data`.*, `status`.`status` as `status` FROM `data` JOIN `status` ON `data`.`id`=`status`.`id_data` WHERE `data`.`id`='".$_GET['id']."'";

			$hasil = mysql_query($sql_status);

			if(mysql_num_rows($hasil) > 0){
				$row = mysql_fetch_array($hasil);
			?>

			<div class="body"></div>
				<div class="grad"></div>
				<div class="header">
				<div>Update<span>Data</span></div>
				<br>
				<div>Kwitansi</div>
			</div>
			<br>
				<form action="update1.php?id=<?php echo $_GET['id'] ?>" method="post" class="field"> 
					<div class="update">
					<div class="field1">
						<label>Nama Lengkap</label> 
						<input type="text" placeholder="nama anda" name="nama" value="<?php echo cek_tampil($row['nama']) ?>" class="fieldinput1"/>
					</div>
						<input type="hidden" name="id" value="<?php echo cek_tampil($row['id']) ?>" />
					<div class="field1">
						<label>Nominal Uang</label><br> 
						<input type="text" placeholder="nominal angka" name="nominal" value="<?php echo cek_tampil($row['nominal']) ?>" class="fieldinput2"/>
					</div>
					<div class="field1">
						<label>Kebutuhan</label><br> 
						<input type="text" placeholder="kebutuhan" name="kebutuhan" value="<?php echo cek_tampil($row['kebutuhan']) ?>" class="fieldinput3"/>
					</div>
							<select name="status" class="selectUpdate">
				          <?php 
										foreach ($status1 as $status1){
											if($status1 == cek_tampil($row['status'])){
												?>
												<option value="<?php echo $status1 ?>" selected><?php echo $status1 ?></option>
												<?php
											} else {
												?>
												<option value="<?php echo $status1 ?>"><?php echo $status1 ?></option>
												<?php
											}
										}
									?>
		        		</select><br>
							<input type="submit" name="ubah" value="Update" class="button"><br>
							<a href="tableKwitansi.php" class="links1">View Data</a>
						</div>
						</form>
						<?php } 
						} else {
							echo "Restricted Area";
							}
						?>
</body>
</html>

