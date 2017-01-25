<!DOCTYPE html>
<html>
<head>
	<title>Kwitansi</title>
		<style>
			table {
			    border-collapse: collapse;
			    width: 100%;
			}

			th, td {
			   
			    padding: 8px;
			    font-family: Arial;
			}

			tr:nth-child(even){background-color: #f2f2f2}

			th {
			    background-color: #FFFFFF;
			    color: #000000;
			}

			.button {
			    background-color: #4CAF50; /* Green */
			    border: none;
			    color: white;
			    padding: 10px 20px;
			    text-align: center;
			    text-decoration: none;
			    display: inline-block;
			    font-size: 16px;
			    margin: 4px 2px;
			    cursor: pointer;
			}
			.button1 {background-color: blue;} /*Blue */
			.button2 {background-color: orange;} /* Orange */
			.button3 {background-color: red;} /* Red */ 

			
		</style>
</head>
<body>
	<table>
		<tr>
			<th colspan="7"><b><h2>DATA KWITANSI</h2></b></th>
	    </tr>
	    <tr>
    		<th bgcolor="#FFFFFF"><a class="button button1" href="tambah.php">Tambah</a></th>
    	</tr>
		<tr>
			<th>No</th>	
			<th>Nama</th>	
			<th>Nominal</th>	
			<th>Kebutuhan</th>
			<th>Status</th>	
			<th align="center" colspan="3">Action</th>

		</tr>
				<?php
					$host = "localhost";
					$user = "root";
					$pass = "";

					$base = "kwitansi";

					$con = mysql_connect($host, $user, $pass) or die("Server ERROR.");
					mysql_select_db($base);

					$sql = "SELECT `data`.*, `status`.`nama` as status FROM `data` JOIN `status` WHERE `data`.`ID`=`status`.`id_data`";

					$data = mysql_query($sql);

					if (mysql_num_rows($data) > 0) {
						while($row = mysql_fetch_array($data)) {
					?>	
							<tr>
								<td align="center"><?php echo $row['ID'] ?></td>
								<td><?php echo $row['nama'] ?></td>
								<td><?php echo $row['nominal'] ?></td>
								<td><?php echo $row['kebutuhan'] ?></td>
								<td><?php echo $row['status'] ?></td>
								<td><center><a class="button button2" href="edit.php?id=<?php echo $row['ID'] ?>"> Edit </center></a></td>
								<td><center><a class="button button3" href="hapus.php?id=<?php echo $row['ID'] ?>"> Hapus </center></a></td>
							</tr>
					<?php
						}
							mysql_close();
					} else {
						echo "Tidak ada data";
					}
				?>
	</table>
</body>
</html>