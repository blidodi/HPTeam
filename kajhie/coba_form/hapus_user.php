<?php
if ($_GET['id']) {
	include "koneksi.php";
	$id = $_GET['id'];
	$sql = "DELETE FROM `user` WHERE `id_user` = $id";
	$sql_1 = "DELETE FROM `level` WHERE `id_level_user` = $id";

	$result = mysql_query($sql);
	$result1 = mysql_query($sql_1);

	if ($result && $result1) {
	// if ($result) {
		header('location:tabel_user.php');
	}else{
		echo "Terjadi Kesalahan";
	}
}
?>