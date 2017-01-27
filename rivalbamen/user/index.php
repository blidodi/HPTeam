<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<title>Form User</title>
</head>
<body>
<div id="header">
	<h1>Tabel User</h1>
</div>
<hr>
<a class="button2" href="add.php"><i class="fa fa-plus"> </i> Tambah</a>
<table>
	<tr><th>No.</th>
		<th>Nama</th>
		<th>Username</th>
		<th>Hak Akses</th>
		<th>Action</th>
	</tr>

<?php
	include "koneksi.php";
	$sql = "SELECT user.id, user.nama, user.username, user_role.role 
			FROM user, user_role 
			WHERE user.role=user_role.id_user";

	$data = mysql_query($sql);

	if(mysql_num_rows($data) > 0) {
		while ($row = mysql_fetch_array($data)) {
?>

	<tr>
		<td><?php echo $row['id'] ?></td>		
		<td><?php echo $row['nama'] ?></td>		
		<td><?php echo $row['username'] ?></td>
		<td><?php echo $row['role'] ?></td>
		<td class="w3-ul"><a class="button1" href="edit.php?id=<?php echo $row['id'] ?>"><i class="fa fa-pencil"> </i> Ubah</a> | 
			<a class="button" href="delete.php?id=<?php echo $row['id']?>"><i class="fa fa-close"> </i> Hapus</a></td>
	</tr>	
	
<?php
		} mysql_close();
	} else {
		echo "Tidak ada data";
	}

?>
</table>
<div id="footer">
	<center>Copyright 2017 Rivalbamen</center>
</div>
</body>
</html>