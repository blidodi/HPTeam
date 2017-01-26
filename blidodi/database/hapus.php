<?php

if (isset($_GET['id'])) {
	include "config.php";
	$id = $_GET['id'];
	$sql_data = "DELETE FROM `data` WHERE `data`.`ID`=$id";
	$sql_status = "DELETE FROM `status` WHERE `status`.`id_data`=$id";

	$result = mysql_query($sql_data);
	$result_status = mysql_query($sql_status);

	if($result && $result_status) {
		header('location:table.php');
	} else {
		echo "Something Went Wrong.";
	}
} else {
	echo "Restricted Area.";
}