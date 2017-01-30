<?php
include "function.php";
?>
<!DOCTYPE html>
<html>
	<head>
	<title>Form Create Data</title>
	<link rel="stylesheet" href="styleLogin.css">
	</head>
			<?php
					if(isset($_POST['tambah']) && $_POST['tambah'] == 'Create'){ 
						include "koneksi.php"; 

						$sql_data = "INSERT INTO `data` (`nama`,`nominal`,`kebutuhan`)
											VALUES ('".$_POST['nama']."',
													'".$_POST['nominal']."',
													'".$_POST['kebutuhan']."')";
						$hasil = mysql_query($sql_data); 

						$id_data = mysql_insert_id();

						$sql_status = "INSERT INTO `status` (`id_data`,`status`)
											VALUES ('".$id_data."',
													'".$_POST['status']."')";
						$hasil = mysql_query($sql_status); 
					}
				?>

	<div class="body"></div>
		<div class="grad"></div>
		<div class="header">
			<div>Tambah<span>Data</span></div>
			<br>
			<div>Kwitansi</div>
	</div>
		<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" class="field">
			<div class="register">
				<input type="text" placeholder="nama lengkap" name="nama" class="fieldinput1"><br>
				<input type="text" placeholder="nominal uang" name="nominal" class="fieldinput2"><br>
				<input type="text" placeholder="kebutuhan" name="kebutuhan" class="fieldinput3"><br>
				<select name="status" class="selectRegister">
		          <?php
		          	foreach ($status1 as $key => $value) {
		          	?>
		          	<option value="<?php echo $key ?>"><?php echo $value ?></option>	
		          	
		          	<?php
		          	}

		          ?>
        		</select><br>
				<input type="submit" name="tambah" value="Create" class="buttonRegister"><br>
				<a href="tableKwitansi.php" class="links">View Data</a>
		</div>
		</form>
</html>

