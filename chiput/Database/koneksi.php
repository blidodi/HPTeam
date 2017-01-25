<?php 
	error_reporting(E_ALL ^ E_DEPRECATED);

	$host = "localhost";
	$user = "root";
	$pass = "";

	$database = "kwitansi_db";

	$connection = mysql_connect($host,$user,$pass);
	mysql_select_db($database, $connection);
?>