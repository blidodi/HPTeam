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
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<table class="table" border="1">
	<tr>
		<td>No</td>
		<td>Diterima Untuk</td>
		<td>Nominal</td>
		<td>Kebutuhan</td>
	</tr>
<?php
	$sql = "SELECT * FROM `data`";

	$hasil = mysql_query($sql);

	while ($data = mysql_fetch_array($hasil)) {
?>
	<tr>
		<td><?php echo $data['no']?></td>
		<td><?php echo $data['dari']?></td>
		<td><?php echo $data['nominal']?></td>
		<td><?php echo $data['kebutuhan']?></td>
	</tr>
	<?php
}
	?>
</table>
</body>
</html>