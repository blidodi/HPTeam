<?php

			if ($_GET['aksi']) {
				include 'controller.php';
				$del = new Form();

				$aksi = $_GET['aksi'];
				$result = $del->del_depart($aksi);
				if ($result) {
					header('location:../view/tbl_departemen_min.php');
				} else {
					echo "Data gagal di hapus";
				}
			}
?>