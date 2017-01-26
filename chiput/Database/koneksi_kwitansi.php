<?php

	// $host = "localhost";
	// $user = "root";
	// $pass = "";

	// $database = "kwitansi_db";

	// $connection = mysql_connect($host,$user,$pass) or die("Server ERROR.");
	// mysql_select_db($database);

	
	// if (mysql_num_rows($data) > 0) {
	// 	while ($row = mysql_fetch_array($data)) {
	// 		echo $row['id']." | ".$row['nama']." | ".$row['nominal']." | ".$row['kebutuhan']."</br>";
	// 	}
	// 	mysql_close();
	// } else {
	// 	echo "Tidak ada data.";
	// }

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title> Learn Database </title>
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
			background-color:  #ffcc00; /* Green */
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
		
	</style>
 </head>
 <body>

  <center>
	<h2> Table Kwitansi Kebutuhan </h2>
	<table border="1px">
		<tr>
			<center>
			<th>No.</th>
			<th>Diterima Dari</th>
			<th>Nominal Uang</th>
			<th>Untuk Pembayaran</th>
			<th>Status</th>
			<th>Operasi</th>
			</center>
		</tr>
	</center>

	<?php  

		include "koneksi.php";

		$sql = "SELECT `data`.*,`status` as `status` FROM `data` JOIN `status` WHERE `data`.`id`=`status`.`id_data` ORDER BY `id` DESC";
		//$sql  = "SELECT * FROM `data` ORDER BY `id` DESC";
		$data = mysql_query($sql);
		//$sql = "SELECT * FROM `data`";

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
				        <a href="hapus.php?id=<?php echo $row['id'] ?>" class="button1 button2">Hapus</a> 
				        <a href="ubah.php?id=<?php echo $row['id'] ?>" class="button1">Ubah</a>
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
 </body>
 </html>



