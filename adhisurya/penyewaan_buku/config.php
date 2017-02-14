<?php 

	$host = "localhost";
	$user = "root";
	$pass = "";
	$db   = "penyewaan_buku";

	$con  = mysql_connect($host, $user, $pass) or die("Server Error!");
			mysql_select_db($db);

?>