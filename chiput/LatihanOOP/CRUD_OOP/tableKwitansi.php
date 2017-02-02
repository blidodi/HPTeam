 <?php
 session_start();
 if (!isset($_SESSION['username']) && !isset($_SESSION['password'])) {
 header("location:formLogin.php"); // jika belum login, maka dikembalikan ke file form_login.php
 }
 ?>
 
 <!DOCTYPE html>
 <html>
 <head>
 	<title> Table Kwitansi </title>
 	<link rel="stylesheet" href="styletable.css">
 </head>
 <body>
<div class="body"></div>
<div class="grad"></div>
<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
<div class="layout">
		<div class="title">
			<div>Table<span>Kwitansi</span></div>
		</div>
		<center>
	<table>
			<tr>
				<th class="font_th">Nomor</th>
				<th class="font_th">Diterima Dari</th>
				<th class="font_th">Nominal Uang</th>
				<th class="font_th">Kebutuhan</th>
				<th class="font_th">Status</th>
				<th class="font_th">Operasi</th>
			</tr>
	<?php  

		include "koneksi.php";

		$sql = "SELECT `data`.*,`status` as `status` FROM `data` JOIN `status` WHERE `data`.`id`=`status`.`id_data` ORDER BY `id` DESC";

		$data = mysql_query($sql);

		$i = 1;

		if (mysql_num_rows($data) > 0) { //mengetahui jumlah record yg ada pda tabel
			while ($row = mysql_fetch_array ($data)){ //tolongdong simpan data di $data berupa array
		?> 
			        <tr>
				        <td><center><?php echo $i ?></center></td>
				        <td><?php echo $row['nama'] ?></td>
				        <td><?php echo $row['nominal'] ?></td>
				        <td><?php echo $row['kebutuhan'] ?></td>
				        <td><?php echo $row['status'] ?></td>
				        <td>
				        <a href="delete1.php?id=<?php echo $row['id'] ?>" class="button1">Delete</a> 
				        <a href="update1.php?id=<?php echo $row['id'] ?>" class="button2">Update</a>
				        </td>
			        </tr>
			        
		<?php
		$i++;
		}
			mysql_close(); //operasi sudah selesai makan ditutup
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



