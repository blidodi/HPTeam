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
			.button2:hover {
				background-color: #FF7F49;
			}
			.button3:hover {
				background-color: #FF496C;
			}
				.button4:hover {
				background-color: #30BA8F;
			}

#header{
	    /*background: none;
	    padding: 3px 3px 3px 8px;
	    margin:0px auto;
	    font-family: Verdana, Geneva, sans-serif;*/
	}

	ul {
	    list-style-type: none;
	    margin: 0;
	    padding: 0;
	    overflow: hidden;
	    background-color: #005555;
	    font-family: Verdana, Geneva, sans-serif;	
	}

	li {
	    float: left;
	}

	li a {
	    display: inline-block;
	    color: white;
	    text-align: center;
	    padding: 14px 16px;
	    text-decoration: none;
	}

	li a:hover {
	     background-color: #5FD367;
	}
		</style>
</head>
<body>
	<table>
	<div id="header">
		<img src="image/header.jpg">
	</div>
<ul>
  <li><a href="dashboard.php"><i class="fa fa-home" aria-hidden="true"></i>
 Home</a></li>
  <li><a href="table.php"><i class="fa fa-users" aria-hidden="true"></i>
 User</a></li>
  <li><a href="kwitansi.php"><i class="fa fa-list-alt" aria-hidden="true"></i>
 Kwitansi</a></li>
    <li><a href="buku.php"><i class="fa fa-list-alt" aria-hidden="true"></i>
 Buku</a></li>
</ul>
		<tr>
			<td colspan="7"><b><h3><i class="fa fa-users" aria-hidden="true"></i>
 DATA USER</h3></b></td>
	    </tr>
    		<th bgcolor="#FFFFFF"><a class="button button1" href="tambah_user.php"><i class="fa fa-plus"></i> Tambah</a></th>
    		<th colspan="5" align="right" bgcolor="#FFFFFF"><a class="button button4" href="Logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i>
 Logout</a></th>
    	</tr>
		<tr>
			<th><i class="fa fa-sort" aria-hidden="true"></i>
 No</th>	
			<th><i class="fa fa-sort" aria-hidden="true"></i>
 Nama</th>	
			<th><i class="fa fa-sort" aria-hidden="true"></i>
 Username</th>	
			<th><i class="fa fa-sort" aria-hidden="true"></i>
 User Role</th>
			<th align="center" colspan="3"><i class="fa fa-sort" aria-hidden="true"></i>
 Action</th>

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





					$sql = "SELECT user.kode_user, user.nama, user.username, user.password, penyewa.kode_sewa, 			   penyewa.kode_user, penyewa.kode_buku, penyewa.kode_member, penyewa.					   tanggal_pinjam, penyewa.tanggal_kembali
							 FROM user, penyewa 
							 WHERE user.kode_user=penyewa.kode_user";
		
		

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
								<td><center><a class="button button2" href="ubah_user.php?id=<?php echo $row['ID'] ?>"><i class="fa fa-pencil" aria-hidden="true"></i>
 Ubah </center></a></td>
								<td><center><a class="button button3" href="hapus_user.php?id=<?php echo $row['ID'] ?>"><i class="fa fa-eraser" aria-hidden="true"></i>
 Hapus </center></a></td>
							</tr>

					<?php
						}
							mysql_close();
					} else {
						echo "Tidak ada data";
					}
				?>
							<table>
			<tr bgcolor="#005555" style="font-family: font-family: Verdana, Geneva, sans-serif; color: #FFFFFF" align="center">
				<br/>
				<br/>	
				<td colspan="7">Sistem Kwitansi</td>
			</tr>
			</table>
	</table>
</body>
</html>