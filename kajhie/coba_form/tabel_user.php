<?php
$host = "localhost";
$user = "root";
$pass = "";

$base = "kwitansi";

$con = mysql_connect($host, $user, $pass) or die("Server ERROR.");
mysql_select_db($base);

// $sql = "SELECT * FROM `data`";

// $data = mysql_query($sql);

// if (mysql_num_rows($data)>0) {
// 	while ($row = mysql_fetch_array($data)) {
// 		echo $row['no']."|".$row['dari']."|".$row['nominal']."|".$row['kebutuhan']."<br/>";
// 	}
// 	mysql_close();
// } else {
// 	echo "tidak ada data";
// }
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
		<th>password</th>
		<th>aksi</th>
	</tr>
<?php
//select `data`.*, `nama_status` as `status` from `data` join `status` where `data`.`no`=`status`.`id_status`
// and  `status`.`nama_status`='Belum Lunas'
	// $sql = "SELECT `data`.*, `nama_status` as `status` from `data` join `status` where `data`.`no`=`status`.`id_status`";
	$sql = "SELECT * FROM `user`";
	$hasil = mysql_query($sql);
	while ($data = mysql_fetch_array($hasil)) {
?>
	<tr>
		<td><?php echo $data['id_user']?></td>
		<td><?php echo $data['nama_user']?></td>
		<td><?php echo $data['username']?></td>
		<td><?php echo $data['pass']?></td>
		<td>
			<a class="<!-- button_kuning -->" href="<!-- ubah.php -->">Update</a> <a class="<!-- button_merah -->" href="hapus_user.php?id=<?php echo $data['id_user']?>">Delete</a>
		</td>
	</tr>
	<?php
}
	?>
</table>
<br/>
<a class="<!-- button_biru -->" href="<!-- tambah_data.php -->">Tambah Data</a>
</center>
</body>
</html>