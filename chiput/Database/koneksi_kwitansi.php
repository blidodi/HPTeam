<?php

	$host = "localhost";
	$user = "root";
	$pass = "";

	$database = "kwitansi_db";

	$connection = mysql_connect($host,$user,$pass) or die("Server ERROR.");
	mysql_select_db($database);

	
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

		@font-face{
			font-family: "Baron Neue Black";
			src:url(Baron Neue Black.otf);
			color: white;
			text-shadow: 1px 1px 5px #FF007F;
		}
		#button1{
			background-color: #000000;
			border: 1px solid;
			color: white;
			cursor: pointer;
			text-align: center;
		}
		#button2{
			background-color: #f44336;
			border: 1px solid;
			color: white;
			cursor: pointer;
			text-align: center;
		}
		#button-hover{

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

		$sql = "SELECT `data`.*,`status` as status FROM `data` JOIN `status` WHERE `data`.`id`=`status`.`id_data` ";
		//$sql = "SELECT * FROM `data`";
		$hasil = mysql_query($sql);

		while ($data = mysql_fetch_array ($hasil)){
		echo "    
		        <tr>
		        <td><center>".$data['id']."</center></td>
		        <td>".$data['nama']."</td>
		        <td>".$data['nominal']."</td>
		        <td>".$data['kebutuhan']."</td>
		        <td>".$data['status']."</td>
		        <td><a href=\"hapus.php?id=\" id=\"button2\">Hapus</a> <a href=\"ubah.php?id=\" id=\"button1\">Ubah</a></td>
		        </tr> 
		        ";
		        
		}

	?>
	</table>
 </body>
 </html>



