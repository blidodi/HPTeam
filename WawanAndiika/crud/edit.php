<!DOCTYPE html>
<html>
<head>
	<title>Edit Buku</title>
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
		if(isset($_GET['id'])){
			$id = $_GET['id'];
            $query = mysqli_query($koneksi, "SELECT * FROM tbl_buku WHERE id = '$id'");
			$data = mysqli_fetch_array($query);
            $judul = $data['judul'];
	        $penulis = $data['penulis'];
	        $penerbit = $data['penerbit'];
	        $tahun = $data['tahun'];
	        $isbn = $data['isbn'];
        }
		if(isset($_POST['simpan'])){
			$judul = $_POST['judul'];
			$penulis = $_POST['penulis'];
			$penerbit = $_POST['penerbit'];
			$tahun = $_POST['tahun'];
			$isbn = $_POST['isbn'];

			if($judul==""||$penulis==""||$penerbit==""||$tahun==""||$isbn==""){
				echo '<div class="pesan">Ada form yang belum terisi...</div>';
			} else {
				$query = mysqli_query($koneksi, "UPDATE tbl_buku SET judul='$judul', penulis='$penulis', penerbit ='$penerbit', tahun='$tahun', isbn='$isbn' WHERE id=$id");
				if($query){
	                echo '<div class="pesan" style="color: #11a909;">Data berhasil diupdate...</div>';
	            } else {
	            	echo 'Data Gagal di simpan';
	            }
			}

		}
	?>
	<form action="" method="POST">
		<label>Judul Buku</label>
		<input type="text" name="judul" placeholder="Judul Buku" value="<?= $judul; ?>" />
		<label>Penulis Buku</label>
		<input type="text" name="penulis" placeholder="Penulis Buku" value="<?= $penulis; ?>" />
		<label>Penerbit Buku</label>
		<input type="text" name="penerbit" placeholder="Penerbit Buku" value="<?= $penerbit; ?>" />
		<label>Tahun Terbit Buku</label>
		<input type="number" name="tahun" placeholder="Tahun Terbit Buku" value="<?= $tahun; ?>" />
		<label>Number ISBN</label>
		<input type="text" name="isbn" placeholder="Number ISBN" value="<?= $isbn; ?>" />
		<label></label>
		<input class="tambah" style="width:80px;border:none;float:left;cursor: pointer;" type="submit" name="simpan" value="Simpan">
	</form>
	<a class="tambah" href="index.php" style="float: left;margin-top: 20px;margin-left: 5px;background: #11b335;">View All</a>
	</div>
</body>
</html>