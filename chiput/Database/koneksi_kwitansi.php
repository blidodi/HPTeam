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

		tr:nth-child(even){background-color: #f2f2f2}

		th {
		    background-color: green;
		    color: white;
		}

		h3{
			font-family: "Times New Roman";
			font-style: italic;
		}
	</style>
 </head>
 <body>

  <center>
	<h3> Tampil Database Kwitansi </h3>

	<table border="1px">
		<tr>
			<center>
			<th>No.</th>
			<th>Diterima Dari</th>
			<th>Nominal Uang</th>
			<th>Untuk Pembayaran</th>
			</center>
		</tr>
	</center>

	<?php  

		$sql = "SELECT * FROM `data`";
		$hasil = mysql_query($sql);

		while ($data = mysql_fetch_array ($hasil)){
		echo "    
		        <tr>
		        <td><center>".$data['id']."</center></td>
		        <td>".$data['nama']."</td>
		        <td>".$data['nominal']."</td>
		        <td>".$data['kebutuhan']."</td>
		        </tr> 
		        ";
		        
		}

	?>

	</table>
 
 </body>
 </html>


