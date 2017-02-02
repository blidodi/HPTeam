
			<?php

			if ($_GET['id']) {
				include "koneksi.php";
				$id = $_GET['id'];
				$sql = "DELETE FROM `buku` WHERE `buku`.`id`=$id";

				$hasil = mysql_query($sql);

				if ($hasil) {
					header('location:tableBuku.php');
				} else {
					echo "Something Went Wrong";
				}
			}
			?>