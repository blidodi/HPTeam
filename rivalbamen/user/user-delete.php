<?php

if(isset($_GET['id'])){
	include "koneksi.php";
	$id = $_GET['id'];
	$sql_user = "DELETE FROM `user` WHERE `user`.`id`=$id";

	$result_user = mysql_query($sql_user);

	if($result_user) {
		header('location:user-table.php');
	} else {
		echo "Ada Data yang salah!!!";
	}
} else {
	echo "Anda dihalaman yang salah!!!";
}

?>