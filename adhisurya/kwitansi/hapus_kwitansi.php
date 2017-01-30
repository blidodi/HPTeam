<?php
	if (isset ($_GET['id'])) {
		include "config.php";
		$id = $_GET['id'];
		$sql = "DELETE FROM `data` WHERE `data`.`ID`=$id";
		$sql_1 = "DELETE FROM `status` WHERE `status`.`id_data`=$id";

		$result = mysql_query($sql);
		$result_1 = mysql_query($sql_1);

		if ($result && $result_1) {
			header ('location:kwitansi.php');
		} else {
			echo "Something Went Wrong";
		}
	}
?>