<?php require "function.php"; ?>

<!DOCTYPE >
<html>
	<head>
	<title>Form Update Data Buku</title>
	<link rel="stylesheet" href="styleLogin.css">
	</head>
<body>
		<?php
			if(isset($_GET['id'])){
				include "koneksi.php"; 

				if(isset($_POST['ubah']) && $_POST['ubah'] == 'Update'){ 

				$sql_buku = "UPDATE `buku` SET
								`isbn`='".$_POST['isbn']."', 
								`judul`='".$_POST['judul']."',
								`penulis`='".$_POST['penulis']."',
								`penerbit`='".$_POST['penerbit']."'
								WHERE `id`='".$_POST['id']."'";

				$hasil = mysql_query($sql_buku);
			}

			$sql = "SELECT * FROM `buku` WHERE `buku`.`id`='".$_GET['id']."'";

			$hasil = mysql_query($sql);
			
			if(mysql_num_rows($hasil) > 0){
				$row = mysql_fetch_array($hasil);
			

			?>

			<div class="body"></div>
				<div class="grad"></div>
				<div class="header">
				<div>Update<span>Data</span></div>
				<br>
				<div>Buku</div>
			</div>
			<br>
				<form action="updatebuku.php?id=<?php echo $_GET['id'] ?>" method="post" class="field"> 
					<div class="update">
					<div class="field1">
						<label>ISBN</label><br>
						<input type="text" placeholder="isbn" name="isbn" value="<?php echo cek_tampil($row['isbn']) ?>" class="fieldinput1"/>
					</div>
						<input type="hidden" name="id" value="<?php echo cek_tampil($row['id']) ?>" />
					<div class="field1">
						<label>Judul Buku</label><br> 
						<input type="text" placeholder="judul buku" name="judul" value="<?php echo cek_tampil($row['judul']) ?>" class="fieldinput2"/>
					</div>
					<div class="field1">
						<label>Penulis</label><br> 
						<input type="text" placeholder="penulis" name="penulis" value="<?php echo cek_tampil($row['penulis']) ?>" class="fieldinput3"/>
					</div>
					<div class="field1">
						<label>Penerbit</label><br> 
						<input type="text" placeholder="penerbit" name="penerbit" value="<?php echo cek_tampil($row['penerbit']) ?>" class="fieldinput4"/>
					</div>
							<br>
							<input type="submit" name="ubah" value="Update" class="button"><br>
							<a href="tableBuku.php" class="links1">View Data</a>
						</div>
						</form>
						<?php } 
						} else {
							echo "Restricted Area";
							}
						?>
</body>
</html>

