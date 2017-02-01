<?php
if ($_GET['id']) {
	include "koneksi.php";
	$id = $_GET['id'];
	$sql = "DELETE FROM `buku` WHERE `id_buku` = $id";

	$result = mysql_query($sql);

	if ($result) {
		header('location:tabel.php');
	}else{
		echo "Terjadi Kesalahan";
	}
}
?>