<?php

if(isset($_GET['id'])){
	include "koneksi.php";
	$id = $_GET['id'];
	$sql_data = "DELETE FROM `kwitan` WHERE `kwitan`.`id`=$id";

	$result_data = mysql_query($sql_data);

	if($result_data) {
		header('location:kwitansi-table.php');
	} else {
		echo "Ada Data yang salah!!!";
	}
} else {
	echo "Anda dihalaman yang salah!!!";
}

?>