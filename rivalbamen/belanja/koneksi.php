<?php
// koneksi ke mysql
$dbHost = "localhost";
$dbUser = "root";
$dbPass = "";
$dbName = "sewa_buku";
mysql_connect($dbHost, $dbUser, $dbPass);
mysql_select_db($dbName);
?>