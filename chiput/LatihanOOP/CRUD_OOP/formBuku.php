<?php
include "function.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Form Input Buku</title>
	<link rel="stylesheet" href="styleLogin.css">
</head>
		<?php
	          if(isset($_POST['tambah']) && $_POST['tambah'] == 'Create'){ 
	            include "koneksi.php"; 

	            $sql_buku = "INSERT INTO `buku` (`isbn`,`judul`,`penulis`,`penerbit`)
	                      VALUES ('".$_POST['isbn']."',
	                          '".$_POST['judul']."',
	                          '".$_POST['penulis']."',
	                          '".$_POST['penerbit']."')";

	            $hasil = mysql_query($sql_buku); 

	            $id = mysql_insert_id();

	          }
        ?>
	<div class="body"></div>
		<div class="grad"></div>
		<div class="header">
			<div>Tambah<span>Buku</span></div>
		</div>
		<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
		<div class="register">
				<input type="text" placeholder="isbn" name="isbn" class="fieldinput1"><br>
				<input type="text" placeholder="judul" name="judul" class="fieldinput2"><br>
				<input type="text" placeholder="penulis" name="penulis" class="fieldinput3"><br>
				<input type="text" placeholder="penerbit" name="penerbit" class="fieldinput4"><br>
				
				<input type="submit" name="tambah" value="Create" class="buttonRegister"><br>
				<a href="tableBuku.php" class="links">View Data</a>
		</div>
		</form>
</html>