<?php
 include "koneksi.php";
 session_start();
	if (!isset($_SESSION['nama']) && !isset($_SESSION['password'])) {
		header('location:index.php');
	}else{
?>
<!DOCTYPE html>
<html>
<head>
	<title>Tabel</title>
	<!-- <link rel="stylesheet" type="text/css" href="css/style.css"> -->
</head>
<body>
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
	$sql = "SELECT `user`.*, `level_user` as `level` from `user` join `level` where `user`.`id_user`=`level`.`id_level_user`";

	$hasil = mysql_query($sql);
	while ($data = mysql_fetch_array($hasil)) {
?>
	<tr>
		<td><?php echo $data['id_user']?></td>
		<td><?php echo $data['nama_user']?></td>
		<td><?php echo $data['username']?></td>
		<td><?php echo $data['pass']?></td>
		<td><?php echo $data['level']?></td>
		<td>
			<a class="<!-- button_kuning -->" href="edit_user.php?id=<?php echo $data['id_user']?>">Update</a> <a class="<!-- button_merah -->" href="hapus_user.php?id=<?php echo $data['id_user']?>">Delete</a>
		</td>
	</tr>
	<?php
}

	?>
</table>

<br/>
<a class="<!-- button_biru -->" href="tambah_user.php">Tambah Data</a><br/>
<a class="<!-- button_biru -->" href="logout.php">Log out</a>
</center>
</body>
</html>
<?php
}
?>