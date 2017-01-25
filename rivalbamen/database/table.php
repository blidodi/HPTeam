<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Form Kwitansi</title>
</head>
<body>
<h1>Bukti Kwitansi</h1><hr><br/>
<table>
	<tr><th>No.</th>
		<th>Nama</th>
		<th>Nominal</th>
		<th>Kebutuhan</th>
	</tr>

<?php

	$host = "localhost";
	$user = "root";
	$pass = "";
	$db = "kwitansi";

	$con = mysql_connect($host, $user, $pass) or die("Server Error!");
		mysql_select_db($db);
	$sql = "SELECT * FROM `data`";
	$data = mysql_query($sql);

	if(mysql_num_rows($data) > 0) {
		while ($row = mysql_fetch_array($data)) {
?>

	<tr>
		<td><?php echo $row['id'] ?></td>		
		<td><?php echo $row['nama'] ?></td>		
		<td><?php echo $row['nominal'] ?></td>		
		<td><?php echo $row['kebutuhan'] ?></td>
	</tr>	
	
<?php
		} mysql_close();
	} else {
		echo "Tidak ada data";
	}

?>
</table>
</body>
</html>