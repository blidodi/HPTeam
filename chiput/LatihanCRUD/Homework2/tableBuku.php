 <?php
 session_start();
 if (!isset($_SESSION['username']) && !isset($_SESSION['password'])) {
 header("location:formLogin.php"); // jika belum login, maka dikembalikan ke file form_login.php
 }
 ?>
 
 <!DOCTYPE html>
 <html>
 <head>
 	<title> Table Data Buku </title>
 	<link rel="stylesheet" href="styletable.css">
 </head>
 <body>
<div class="body"></div>
<div class="grad"></div>
<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
<div class="layout">
		<div class="title">
			<div>Table<span>Buku</span></div>
		</div>
		<center>
	<table>
			<tr>
				<th class="font_th">Nomor</th>
				<th class="font_th">ISBN</th>
				<th class="font_th">Judul Buku</th>
				<th class="font_th">Penulis</th>
				<th class="font_th">Penerbit</th>
				<th class="font_th">Operasi</th>
			</tr>
	<?php  

		include "koneksi.php";

		$sql_buku = "SELECT * FROM `buku` ORDER BY `id` DESC";

		$data = mysql_query($sql_buku);

		$i = 1;

		if (mysql_num_rows($data) > 0) { 
			while ($row = mysql_fetch_array ($data)){ 
		?> 
			        <tr>
				        <td><center><?php echo $i ?></center></td>
				        <td><?php echo $row['isbn'] ?></td>
				        <td><?php echo $row['judul'] ?></td>
				        <td><?php echo $row['penulis'] ?></td>
				        <td><?php echo $row['penerbit'] ?></td>
				        <td>
				        <a href="deletebuku.php?id=<?php echo $row['id'] ?>" class="button1">Delete</a> 
				        <a href="updatebuku.php?id=<?php echo $row['id'] ?>" class="button2">Update</a>
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
	<a href="formBuku.php" class="button4">Create</a>
	<a href="logout.php" class="button3" align="center">Logout</a>
	<?php include "footer.php" ?>
</div>
</form>
 </body>
 </html>



