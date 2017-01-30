<?php

	if (isset($_GET['page'])) {
		switch ($_GET['page']) {
			case 'table':
			 	# code...
			require "../LatihanCRUD/tampildata.php";
			break;
			 	case 'tambah':
			 		# code...
			 	require "../LatihanCRUD/tambahakun.php";
			 		break;
		}
	} else {
		require "../LatihanCRUD/index_1.php";
	}

?>