<?php
include "fungsi.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Form Register</title>
	<link rel="stylesheet" href="styleLogin.css">
</head>
		<?php
	          if(isset($_POST['tambah']) && $_POST['tambah'] == 'Tambah'){ 
	            include "connection.php"; 

	            $sql_user = "INSERT INTO `user` (`nama_user`,`username`,`password`)
	                      VALUES ('".$_POST['nama_user']."',
	                          '".$_POST['username']."',
	                          '".$_POST['password']."')";
	            $hasil = mysql_query($sql_user); 

	            $id = mysql_insert_id();

	            $sql_role = "INSERT INTO `user_role` (`id`,`status`)
	                      VALUES ('".$id."',
	                          '".$_POST['status']."')";
	            $hasil = mysql_query($sql_role);

	            // if(isset($hasil)){
	            //   echo "Data Berhasil Disimpan <a href=\"tampildata.php\"></a>";
	            // } else {
	            //   echo "Data Gagal Disimpan";
	            // }
	          }
        ?>
	<div class="body"></div>
		<div class="grad"></div>
		<div class="header">
			<div>Tambah<span>Akun</span></div>
		</div>
		<br>
		<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
		<div class="login">
				<input type="text" placeholder="nama lengkap" name="nama_user" class="fieldinput1"><br>
				<input type="text" placeholder="username" name="username" class="fieldinput2"><br>
				<input type="password" placeholder="password" name="password" class="fieldinput3"><br>
				<select name="status" class="select">
		          <?php
		          	foreach ($status as $key => $value) {
		          	?>
		          	<option value="<?php echo $key ?>"><?php echo $value ?></option>	
		          	
		          	<?php
		          	}

		          ?>
        		</select><br>
				<input type="submit" name="tambah" value="Tambah" class="button"><br>
				<a class="links" href="tampildata.php">Tampil Data</a>
		</div>
		</form>
</html>