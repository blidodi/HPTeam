<!DOCTYPE html>
<html>
<head>
	<title>Tambah Buku</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<style type="text/css">
		input {
			margin: 5px 0;
		    padding: 5px;
		    display: block;
		    float: left;
		    width: 40%;
		}
	</style>
</head>
<body>
	<div class="wrapper">
		<?php
			include "koneksi.php";
			if(isset($_POST['simpan'])){

				$judul = $_POST['judul'];
				$penulis = $_POST['penulis'];
				$penerbit = $_POST['penerbit'];
				$tahun = $_POST['tahun'];
				$isbn = $_POST['isbn'];

				if($judul==""||$penulis==""||$penerbit==""||$tahun==""||$isbn==""){
					echo '<div class="pesan">Tolong lengkapi dulu datanya bro...</div>';
				} else {
					$query = mysqli_query($koneksi, "INSERT INTO tbl_buku SET judul='$judul', penulis='$penulis', penerbit ='$penerbit', tahun='$tahun', isbn='$isbn'");
					if(!$query){
		            	echo '<div class="pesan">Data gagal disimpan...</div>';
		            } else {
		            	echo '<div class="pesan" style="color: #11a909;">Data berhasil disimpan...</div>';
		            }
				}

			}
		?>
		<form action="" method="POST">
			<label>Judul Buku</label>
			<input type="text" name="judul" placeholder="Judul Buku" />
			<label>Penulis Buku</label>
			<input type="text" name="penulis" placeholder="Penulis Buku" />
			<label>Penerbit Buku</label>
			<input type="text" name="penerbit" placeholder="Penerbit Buku" />
			<label>Tahun Terbit Buku</label>
			<input type="number" name="tahun" placeholder="Tahun Terbit Buku" />
			<label>Number ISBN</label>
			<input type="text" name="isbn" placeholder="Number ISBN" />
			<label></label>
			<input class="tambah" style="width:80px;border:none;float:left;cursor: pointer;" type="submit" name="simpan" value="Simpan">
			<a class="tambah" href="index.php" style="float: left;margin-top: 20px;margin-left: 5px;background: #11b335;">View All</a>	
		</form>
	</div>
</body>
</html>