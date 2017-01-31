<?php 

	if(isset($_GET['page'])) {
		switch ($_GET['page']) {
			case 'table':
				require "../database/table.php";
				break;
			case 'login':
				require "../rahasia/index.php";
				break;
			

		}
	} else {
		require "../homework2/index.php";
	}

?>