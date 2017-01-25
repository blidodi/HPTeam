<?php 

$host = "localhost";
$user = "root";
$pass = "";
$db = "kwitansi";

$con = mysql_connect($host, $user, $pass) or die("Server Error!");
	mysql_select_db($db);

?>