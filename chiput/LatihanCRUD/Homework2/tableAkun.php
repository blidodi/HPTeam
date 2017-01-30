 <?php
 session_start();
 if (!isset($_SESSION['username']) && !isset($_SESSION['password'])) {
 header("location:formLogin.php"); // jika belum login, maka dikembalikan ke file form_login.php
 }
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Table Akun</title>
	<link rel="stylesheet" href="styletable.css">
</head>
<body>
<?php include "header"; ?>
<?php include "menu"; ?>
<div class="body"></div>
<div class="grad"></div>
<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
<div class="layout">
		<div class="title">
			<div>Table<span>Akun</span></div>
		</div>
<center>
	<table>
			<tr>
				<th class="font_th">Nomor</th>
				<th class="font_th">Nama Lengkap</th>
				<th class="font_th">Username</th>
				<th class="font_th">Password</th>
				<th class="font_th">Status</th>
				<th class="font_th">Operasi</th>
			</tr>
	
<?php  

		include "koneksi.php";

		$sql_data = "SELECT `user`.*,`user_role`.`status` as `status` FROM `user` JOIN `user_role` WHERE `user`.`id_user`=`user_role`.`id` ORDER BY `id_user` DESC";

		$data = mysql_query($sql_data);

		// echo $sql;
		// die();

		$i = 1;

		if (mysql_num_rows($data) > 0) { 
			while ($row = mysql_fetch_array ($data)){ 
		?> 
			        <tr>
				        <td><center><?php echo $i ?></center></td>
				        <td><?php echo $row['nama_user'] ?></td>
				        <td><?php echo $row['username'] ?></td>
				        <td><?php echo $row['password'] ?></td>
				        <td><?php echo $row['status'] ?></td>
				        <td>
				        <a href="delete.php?id=<?php echo $row['id_user'] ?>" class="button1">Delete</a> 
				        <a href="update.php?id=<?php echo $row['id_user'] ?>" class="button2">Update</a>
						</td>
			        </tr>
			          
		<?php
		$i++;
		}
			mysql_close(); 
		} else {
			echo "Tidak ada data";
		}
?>
	</table>
	</center>
	<a href="formRegister.php" class="button4">Create</a>
	<a href="logout.php" class="button3" align="center">Logout</a>
	<?php include "footer.php" ?>
</div>
</form>
</body>
</html>