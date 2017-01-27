
			<?php

			if ($_GET['id']) {
				include "koneksi.php";
				$id = $_GET['id'];
				$sql = "DELETE FROM `data` WHERE `data`.`id`=$id";
				$sql1 = "DELETE FROM `status` WHERE `status`.`id_data`=$id";

				$hasil = mysql_query($sql);
				$hasil1 = mysql_query($sql1);

				if ($hasil && $hasil1) {
					header('location:koneksi_kwitansi.php');
				} else {
					echo "Something Went Wrong";
				}
			}
			?>