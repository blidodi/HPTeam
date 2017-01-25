<?php

$host = "localhost";
$user = "root";
$pass = "";

$base = "kwitansi";

$con = mysql_connect($host, $user, $pass) or die("Server ERROR.");
mysql_select_db($base);

$sql = "DELETE FROM `status` WHERE"