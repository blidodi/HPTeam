<?php
 session_start();
	if (!isset($_SESSION['username']) && !isset($_SESSION['password'])) {
		header('location:index.php');
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Tabel</title>
	<link rel="stylesheet" type="text/css" href="css/style_menu.css">
</head>
<body>
<?php include "header_halaman.php";?>

<?php include "menu_halaman.php";?>

<div >

<center>

<h3> Table User </h3>

<table class="table" border="1">
	<tr>
		<th>No</th>
		<th>Nama</th>
		<th>Username</th>
		<th>Password</th>
		<th>Level</th>
		<th>Aksi</th>
	</tr>
<?php
	include "koneksi.php";
	$sql = "SELECT `user`.*, `level_user` as `status` from `user` join `level` where `user`.`level`=`level`.`id_level_user`";

	// echo $sql;
	// die();
	//$sql = "SELECT * from `user` ORDER BY `id_user` DESC";
	$hasil = mysql_query($sql);

	$i=1;
	if (mysql_num_rows($hasil) > 0) {

		while ($row = mysql_fetch_array($hasil)) {
?>
		<tr>
			<td><?php echo $i?></td>
			<td><?php echo $row['nama_user']?></td>
			<td><?php echo $row['username']?></td>
			<td><?php echo $row['pass']?></td>
			<td><?php echo $row['status']?></td>
			<td>
				<a class="<!-- button_kuning -->" href="edit_user.php?id=<?php echo $row['id_user']?>">Update</a> <a class="<!-- button_merah -->" href="hapus_user.php?id=<?php echo $row['id_user']?>">Delete</a>
			</td>
		</tr>
<?php
			$i++;
		}
			mysql_close();
	}else{
		echo "Tidak ada data !!";
	}

?>
</table>

	<br/>
	<a href="tambah_user.php">Tambah Data</a><br/>

</div>

<?php include "footer_halaman.php";?>
</center>
</body>
</html>
