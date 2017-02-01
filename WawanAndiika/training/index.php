<?php
	if(isset($_GET['page'])){
		switch ($_GET['page']) {
			case 'belanja':
				include "tabel/belanja.php";
				break;
			case 'dashboard':
				include "tabel/dashboard.php";
				break;
			case 'buku':
				include "tabel/buku.php";
				break;
			case 'profile':
				# code...
				break;
		}
	} else {
		include "login.php";
	}
?>