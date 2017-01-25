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
			    text-align: left;
			    padding: 8px;
			}

			tr:nth-child(even){background-color: #f2f2f2}

			th {
			    background-color: #CCCCCC;
			    color: white;
			}
			button {
			    background-color: blue; /* Green */
			    border: none;
			    color: white;
			    padding: 10px 20px;
			    text-align: center;
			    text-decoration: none;
			    display: inline-block;
			    font-size: 16px;
			    margin: 4px 2px;
			    cursor: pointer;
			    -webkit-transition-duration: 0.4s; /* Safari */
			    transition-duration: 0.4s;
			}
			.button2:hover {
			    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
			}
		</style>
</head>
<body>
	<table>
		<tr>
			<th colspan="7">Form Data</th>
	    </tr>
		<tr>
			<th>No</th>	
			<th>Nama</th>	
			<th>Nominal</th>	
			<th>Kebutuhan</th>	
			<th align="center">Detail</th>
			<th align="center">Edit</th>
			<th align="center">Hapus</th>
		</tr>
				<?php
					$host = "localhost";
					$user = "root";
					$pass = "";

					$base = "kwitansi";

					$con = mysql_connect($host, $user, $pass) or die("Server ERROR.");
					mysql_select_db($base);

					$sql = "SELECT * FROM `data`";

					$data = mysql_query($sql);

					if (mysql_num_rows($data) > 0) {
						while($row = mysql_fetch_array($data)) {
					?>	
							<tr>
								<td align="center"><?php echo $row['ID'] ?></td>
								<td align="center"><?php echo $row['nama'] ?></td>
								<td align="center"><?php echo $row['nominal'] ?></td>
								<td><?php echo $row['kebutuhan'] ?></td>
								<td><button class="button button2">Edit</button></td>
								<td><button class="button button2">Edit</button></td>
								<td><button class="button button2">Hapus</button></td>
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