<?php require "fungsi.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Ubah Data</title>
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
				color: orange;
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
	<h1>Ubah Data</h1>
	<?php
		if(isset($_GET['id'])) {
			include "config.php";

			if(isset($_POST['ubah']) && $_POST['ubah'] == 'Ubah') {

				$sql_data = "UPDATE `buku` SET 
							`isbn`='".$_POST['isbn']."',
							`nama`='".$_POST['nama']."',
							`penulis`='".$_POST['penulis']."',
							`penerbit`='".$_POST['penerbit']."'
							WHERE `ID`='".$_POST['id']."'";

				$result = mysql_query($sql_data);

				/*$sql_status = "UPDATE `user_role` SET
							`user_role`='".$_POST['role']."'
							WHERE `ID`='".$_POST['id']."'";

				$result = mysql_query($sql_status);*/

			if(isset($result)) {
				echo "Data Berhasil Diubah. <a href=\"buku.php\">Lihat Hasilnya</a>";
			} else {
				echo "Data Gagal Diubah.";
			}		
		}

		$sql = "SELECT * FROM buku ORDER BY ID DESC";

		$result = mysql_query($sql);

		if (mysql_num_rows($result) > 0) {
			$row = mysql_fetch_array($result);
	?>
	<form action="ubah_buku.php?id=<?php echo $_GET['id'] ?>" method="post">
		<label>ISBN :</label>
		<input type="text" name="isbn" value="<?php echo check_post($row['isbn']) ?>"/>
		<input type="hidden" name="id" value="<?php echo check_post($row['ID']) ?>"/>
		<label>Nama :</label>
		<input type="text" name="nama" value="<?php echo check_post($row['nama']) ?>"/>
		<label>Penulis :</label>
		<input type="text" name="penulis" value="<?php echo check_post($row['penulis']) ?>"/>
		<label>Penerbit :</label>
		<input type="text" name="penerbit" value="<?php echo check_post($row['penerbit']) ?>"/>
		
		<input class ="button button2" type="submit" name="ubah" value="Ubah" />
		<a class ="button button4" href="buku.php">Batal</a>		
	</form>
	<?php }
	} else {
		echo "Restricted Area";
	} ?>
</body>
</html>