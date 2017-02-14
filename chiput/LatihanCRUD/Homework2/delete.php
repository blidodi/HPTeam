<?php

			if ($_GET['id']) {
				include 'koneksi.php';
				$id = $_GET['id'];
				$sql = "DELETE FROM `user` WHERE `user`.`id_user`=$id";
				$sql1 = "DELETE FROM `user_role` WHERE `user_role`.`id`=$id";

				$result = mysql_query($sql);
				$result1 = mysql_query($sql1);

				if ($result && $result1) {
					header('location:tableAkun.php');
				} else {
					echo "Something Went Wrong";
				}
			}
?>