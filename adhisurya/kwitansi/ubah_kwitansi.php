<?php require "fungsi.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Ubah Data</title>
		<style>
			* {
				font: normal 13px/1.3 Calibri;
			}
			h1 {
				font-size: 24px;
				color: orange;
			}
			input, select {
				display: block;
				padding: 10px;
				margin: 10px;
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

		</style>
</head>
<body>
	<h1>Ubah Data</h1>
	<?php
		if(isset($_GET['id'])) {
			include "config.php";

			if(isset($_POST['ubah']) && $_POST['ubah'] == 'Ubah') {

				$sql_data = "UPDATE `data` SET 
							`nama`='".$_POST['nama']."',
							`nominal`='".$_POST['nominal']."',
							`kebutuhan`='".$_POST['kebutuhan']."'
							WHERE `ID`='".$_POST['id']."'";

				$result = mysql_query($sql_data);

				$sql_status = "UPDATE `status` SET
							`nama`='".$_POST['status']."'
							WHERE `id_data`='".$_POST['id']."'";

				$result = mysql_query($sql_status);

			if(isset($result)) {
				echo "Data Berhasil Diubah. <a href=\"kwitansi.php\">Lihat Hasilnya</a>";
			} else {
				echo "Data Gagal Diubah.";
			}		
		}

		$sql_status = "SELECT `data`.*, `status`.`nama` as `status` FROM `data` JOIN `status` ON `data`.`ID`=`status`.`id_data` WHERE `data`.`ID`='".$_GET['id']."'";

		$result = mysql_query($sql_status);

		if (mysql_num_rows($result) > 0) {
			$row = mysql_fetch_array($result);
	?>
	<form action="ubah_kwitansi.php?id=<?php echo $_GET['id'] ?>" method="post">
		<label>Nama :</label>
		<input type="text" name="nama" value="<?php echo check_post($row['nama']) ?>"/>
		<input type="hidden" name="id" value="<?php echo check_post($row['ID']) ?>"/>
		<label>Nominal :</label>
		<input type="text" name="nominal" value="<?php echo check_post($row['nominal']) ?>"/>
		<label>Kebutuhan :</label>
		<input type="text" name="kebutuhan" value="<?php echo check_post($row['kebutuhan']) ?>"/>
		<select name="status">
			<?php
				foreach($status as $status) {
					if($status == check_post($row['status'])) {
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
		<input class ="button button2" type="submit" name="ubah" value="Ubah" />
		<a class ="button button2" href="kwitansi.php">Batal</a>		
	</form>
	<?php }
	} else {
		echo "Restricted Area";
	} ?>
</body>
</html>