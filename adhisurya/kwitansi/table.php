<?php
	session_start();
		if(!isset($_SESSION['username']) && !isset($_SESSION['password'])) {
			header('location:login.php');
		}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
				padding: 10px 40px;
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
			    font-size: 12px;
			    margin: 4px 2px;
			    cursor: pointer;
			}
			.button1 {background-color: blue;} /*Blue */
			.button2 {background-color: orange;} /* Orange */
			.button3 {background-color: red;} /* Red */ 
			.button4 {background-color: #4CAF50;} /* Green */
			
			.button1:hover {
				background-color: #1974D2;
			}
		</style>
</head>
<body>
	<table>
		<tr>
			<td colspan="7"><b><h3><i class="fa fa-users" aria-hidden="true"></i>
 FORM DATA</h3></b></td>
	    </tr>
	    <tr>
    		<th bgcolor="#FFFFFF"><a class="button button1" href="tambah.php"><i class="fa fa-plus"></i> Tambah</a></th>
    		<th colspan="5" align="right" bgcolor="#FFFFFF"><a class="button button4" href="Logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i>
 Logout</a></th>
    	</tr>
		<tr>
			<th>No</th>	
			<th>Nama</th>	
			<th>Username</th>	
			<th>User Role</th>
			<th align="center" colspan="3">Action</th>

		</tr>
		
				<?php
					include "config.php";
					/*$sql = "SELECT user.id, user.nama, user.username ,user_role.role 
							FROM user, user_role 
							WHERE user.role=user_role.id_user";
					$data = mysql_query($sql);*/


					$sql = "SELECT user.ID, user.nama, user.username, user_role.role
							FROM user, user_role 
							WHERE user.role=user_role.ID";
		

					/* $sql = "SELECT `ID`, `nama`, `username`, `password` FROM `user`"; */

					$user = mysql_query($sql);
					$i = 0;
					if (mysql_num_rows($user) > 0) {
						while($row = mysql_fetch_array($user)) {
					$i++;
					?>	
							<tr>
								<td align="center"><?php echo $i ?></td>
								<td><?php echo $row['nama'] ?></td>
								<td><?php echo $row['username'] ?></td>
								<td><?php echo $row['role'] ?></td>
								<td><center><a class="button button2" href="ubah.php?id=<?php echo $row['ID'] ?>"><i class="fa fa-pencil" aria-hidden="true"></i>
 Ubah </center></a></td>
								<td><center><a class="button button3" href="hapus.php?id=<?php echo $row['ID'] ?>"><i class="fa fa-eraser" aria-hidden="true"></i>
 Hapus </center></a></td>
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