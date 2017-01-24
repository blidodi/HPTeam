<?php
	error_reporting(E_ALL ^ E_DEPRECATED);

	$host = "localhost";
	$user = "root";
	$pass = "darkinme88";

	$base = "kwitansi";


	$con = mysql_connect($host, $user, $pass) or die("Server ERROR.");
	mysql_select_db($base);

	$sql = "SELECT * FROM `data`";

	$data = mysql_query($sql);

	if (mysql_num_rows($data) > 0) {
		while($row = mysql_fetch_array($data)) {
			echo $row['ID']." | ".$row['nama']." | ".$row['nominal']." | ".$row['kebutuhan']."<br/>";
		}
		mysql_close();
	} else {
		echo "Tidak ada data.";
	}