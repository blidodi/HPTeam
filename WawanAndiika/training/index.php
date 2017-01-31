<?php
	if(isset($_GET['page'])){
		switch ($_GET['page']) {
			case 'belanja':
				include "tabel/belanja.php";
				break;
			case 'dashboard':
				include "tabel/dashboard.php";
				break;
			case 'user':
				# code...
				break;
			case 'profile':
				# code...
				break;
		}
	} else {
		include "login.php";
	}
?>