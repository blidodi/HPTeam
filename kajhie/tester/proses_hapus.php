<?php
if ($_GET['id']) {
	include "koneksi.php";
	$id = $_GET['id'];
	$sql = "DELETE FROM `data` WHERE `data`.`no` = $id";
	$sql_1 = "DELETE FROM `status` WHERE `status`.`id_status` = $id";

	$result = mysql_query($sql);
	$result1 = mysql_query($sql_1);

	if ($result && $result1) {
		header('location:tabel.php');
	}else{
		echo "Terjadi Kesalahan";
	}
}
?>