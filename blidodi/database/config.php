<?php
	error_reporting(E_ALL ^ E_DEPRECATED);
	
	$host = "localhost";
	$user = "root";
	$pass = "darkinme88";
	$base = "kwitansi";

	$connect = mysql_connect($host, $user, $pass);
	mysql_select_db($base, $connect);