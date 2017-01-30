 <?php
 session_start();
 if (!isset($_SESSION['username']) && !isset($_SESSION['password'])) {
 header("location:index.php"); // jika belum login, maka dikembalikan ke file form_login.php
 }
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title> Tampil Database </title>
 	<style>
		table {
		    border-collapse: collapse;
		    width: 50%;
		}

		th, td {
		    text-align: center;
		    padding: 8px;
		    font-style: italic;
		}
		tr{
			border-color: inherit;
		}

		tr:nth-child(even){background-color: #FFDAB9}

		th {
		    background-color: #DC143C;
		    color: white;
		}

		h2{
			font-family: "Baron Neue Black";
			src:url(Baron Neue Black.otf);
			color: #DC143C;
			text-shadow: 1px 1px 5px #FFFAFA;
		}
		.button1{
			background-color:  #2f4f4f; /* Green */
		    border: none;
		    border-radius: 5px;
		    color: white;
		    padding: 3px 10px;
		    text-align: center;
		    text-decoration: none;
		    display: inline-block;
		    font-size: 16px;
		    margin: 5px 3px;
		    cursor: pointer;
		}
		.button2{
			background-color: #f44336;
			border: none;
			border-radius: 5px;
		    color: white;
		    padding: 3px 10px;
		    text-align: center;
		    text-decoration: none;
		    display: inline-block;
		    font-size: 16px;
		    margin: 5px 3px;
		    cursor: pointer;
		}
		.button3{
			background-color: #008080
		}
		
	</style>
 </head>
 <body>
  <center>
	<h2> Table Data User </h2>
	<table border="1px">
		<tr>
			<center>
			<th>No.</th>
			<th>Nama Lengkap</th>
			<th>Username</th>
			<th>Password</th>
			<th>Status</th>
			<th>Operasi</th>
			<th>Tambah Data</th>
			</center>
		</tr>
	</center>

	<?php  

		include "connection.php";

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
				        <a href="hapus.php?id=<?php echo $row['id_user'] ?>" class="button1 button2">Hapus</a> 
				        <a href="ubah.php?id=<?php echo $row['id_user'] ?>" class="button1">Ubah</a>
						</td>
				        <td><a href="tambahakun.php?id=<?php echo $row['id_user'] ?>" class="button3 button1">Tambah</a></td>
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
	<a href="keluar.php">Klik di sini</a> untuk Keluar
 </body>
 </html>



