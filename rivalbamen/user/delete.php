<?php

if(isset($_GET['id'])){
	include "koneksi.php";
	$id = $_GET['id'];
	$sql_user = "DELETE FROM `user` WHERE `user`.`id`=$id";
	//$sql_status = "DELETE FROM `status` WHERE `status`.`id_data`=$id";

	$result_user = mysql_query($sql_user);
	//$result_status = mysql_query($sql_status);

	if($result_user) {
		header('location:index.php');
	} else {
		echo "Ada Data yang salah!!!";
	}
} else {
	echo "Anda dihalaman yang salah!!!";
}

?>