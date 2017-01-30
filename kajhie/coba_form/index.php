<?php
	if (isset($_GET['page'])) {
		switch ($_GET['page']) {
			case 'tabel':
					require "../coba_form/tabel.php";
				break;
		}
	}else{
			require "../coba_form/login.php";
	}
?>