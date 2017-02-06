<?php 

$host = "localhost";
$user = "root";
$pass = "";
$db = "sewa_buku";

$con = mysql_connect($host, $user, $pass) or die("Server Error!");
	mysql_select_db($db);

?>