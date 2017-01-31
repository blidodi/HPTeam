<?php

	if(isset($_GET['page'])) {
		switch ($_GET['page']) {
			case 'table':
					require "../database/table.php";	
				break;
			case  'tambah':
					require "../database/tambah.php";
				break;
			
		}
	} else {
		require "../rahasia/index.php";
	}

?>