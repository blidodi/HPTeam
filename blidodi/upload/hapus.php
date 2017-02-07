<?php

	include 'config.php';

	$proses = unlink($folder."kucing.png");

	if($proses) {
		echo "Data terhapus";
	} else {
		echo "Data tidak terhapus";
	}