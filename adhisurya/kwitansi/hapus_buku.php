<?php
	if (isset ($_GET['id'])) {
		include "config.php";
		$id = $_GET['id'];
		$sql = "DELETE FROM `buku` WHERE `buku`.`ID`=$id";
		//$sql_1 = "DELETE FROM `user_role` WHERE `user_role`.`ID`=$id";

		$result = mysql_query($sql);
		//$result_1 = mysql_query($sql_1);

		//if ($result && $result_1) {
		if ($result) {
			header ('location:buku.php');
		} else {
			echo "Something Went Wrong";
		}
	}
?>