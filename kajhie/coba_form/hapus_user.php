<?php
if ($_GET['id']) {
	include "koneksi.php";
	$id = $_GET['id'];
	$sql = "DELETE FROM `user` WHERE `id_user` = $id";

	$result = mysql_query($sql);

	if ($result && $result1) {
	// if ($result) {
		header('location:tabel_user.php');
	}else{
		echo "Terjadi Kesalahan";
	}
}
?>