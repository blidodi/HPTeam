<?php

if($_GET['id']){
	include "config.php";
	$id = $_GET['id'];
	$sql = "DELETE FROM `data` WHERE `data`.`id`=$id";
	$sql1 = "DELETE FROM `status` WHERE `status`.`id_data`=$id";

	$result = mysql_query($sql);
	$result1 = mysql_query($sql1);

	if($result && $result1) {
		header('location:index.php');
	} else {
		echo "Ada yang salah!!!";
	}
}

?>