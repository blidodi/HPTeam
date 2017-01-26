<!DOCTYPE html>
<html>
<head>
	<title>Kwitansi</title>
		<style>
			table {
			    border-collapse: collapse;
			    width: 100%;
			}

			th {
			   
			    padding: 8px;
			    font-family: Arial;
			}

			td {
				padding: 10px 30px;
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
			<td colspan="7"><b><h2>FORM DATA</h2></b></td>
	    </tr>
	    <tr>
    		<th bgcolor="#FFFFFF"><a class="button button1" href="tambah.php">Tambah</a></th>
    	</tr>
		<tr>
			<th>No</th>	
			<th>Nama</th>	
			<th>Username</th>	
			<th>Password</th>
			<th>User Role</th>
			<th align="center" colspan="3">Action</th>

		</tr>
				<?php
					include "config.php";


					$sql = "SELECT `user`.*, `user_role`.`role` as user_role FROM `user` JOIN `user_role` WHERE `user`.`ID`=`user_role`.`ID` ORDER BY `ID` DESC";

					/* $sql = "SELECT `ID`, `nama`, `username`, `password` FROM `user`"; */

					$user = mysql_query($sql);

					if (mysql_num_rows($user) > 0) {
						while($row = mysql_fetch_array($user)) {
					?>	
							<tr>
								<td align="center"><?php echo $row['ID'] ?></td>
								<td><?php echo $row['nama'] ?></td>
								<td><?php echo $row['username'] ?></td>
								<td><?php echo $row['password'] ?></td>
								<td><?php echo $row['user_role'] ?></td>
								<td><center><a class="button button2" href="ubah.php?id=<?php echo $row['ID'] ?>"> Ubah </center></a></td>
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