<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<style>
		input[type=text] {
			    width: 500px;
			    padding: 12px 20px;
			    margin: 8px 0;
			    display: block;
			    border: 1px solid #ccc;
			    border-radius: 4px;
			    box-sizing: border-box;
			}

			select {
			    width: 500px;
			    padding: 12px 0px;
			    margin: 6px 0;
			    display: block;
			    border: 1px solid #ccc;
			    border-radius: 4px;
			    box-sizing: border-box;
			}

			input[type=submit]:hover {
			    background-color: #45a049;
			}

			div {
			    border-radius: 5px;
			    background-color: #f2f2f2;
			    padding: 20px;
			}

			* {
				font: normal 13px/1.3 Calibri;
			}
			h1 {
				font-size: 24px;
				color: blue;
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
			.button4 {background-color: red;} /* Red */ 
		</style>
</head>
<body>
	<h1>Tambah Data</h1>
	<?php
		if(isset($_POST['simpan']) && $_POST['simpan'] == 'Simpan') {
			include "config.php";

			$sql = "INSERT INTO `buku` (`isbn`, `nama`, `penulis`, `penerbit`)
								VALUES ('".$_POST['isbn']."',
										'".$_POST['nama']."',
										'".$_POST['penulis']."',
										'".$_POST['penerbit']."')";
			$result = mysql_query($sql);

			/*$id = mysql_insert_id();

			$sql = "INSERT INTO `user_role` (`ID`, `role`) 
					VALUES ('".$id."', '".$_POST['role']."')";

			$result = mysql_query($sql);*/

			if(isset($result)) {
				echo "Data Berhasil Disimpan. <a href=\"buku.php\">Lihat Hasilnya</a>";
			} else {
				echo "Data Gagal Disimpan.";
			}		
		}
	?>
	<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
		<label>ISBN :</label>
		<input type="text" name="isbn" />
		<label>Nama :</label>
		<input type="text" name="nama" />
		<label>Penulis :</label>
		<input type="text" name="penulis" />
		<label>Penerbit :</label>
		<input type="text" name="penerbit" />
	
		<input class ="button button1" type="submit" name="simpan" value="Simpan" />
		<a class ="button button4" href="buku.php">Batal</a>			
	</form>
</body>
</html>