<?php

if(isset($_GET['id'])){
	include "config.php";
	$id = $_GET['id'];
	$sql_data = "DELETE FROM `data` WHERE `data`.`id`=$id";
	$sql_status = "DELETE FROM `status` WHERE `status`.`id_data`=$id";

	$result_data = mysql_query($sql_data);
	$result_status = mysql_query($sql_status);

	if($result_data && $result_status) {
		header('location:index.php');
	} else {
		echo "Ada Data yang salah!!!";
	}
} else {
	echo "Anda dihalaman yang salah!!!";
}

?>