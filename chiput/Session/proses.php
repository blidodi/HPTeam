<?php
	// if (isset($_POST['simpan']) && $_POST['simpan'] == "Simpan") {
	// 	# code...
	// 	if (empty($_POST['data'])) {
	// 		# code...
	// 		header('location:index.php');
	// 	} else if (isset($_POST['data']) && $_POST['data'] == '123') {
	// 		# code...
	// 		session_start();
	// 		$_SESSION['data'] = $_POST['data'];
	// 		header('location:dashboard.php');
	// 	} else {
	// 		header('location:index.php');
	// 	}
	// }

//--------------------

if (isset($_POST['simpan']) && $_POST['simpan'] == "Simpan") {
	# code...
	if (empty($_POST['nama']) && empty($_POST['data'])) {
		# code...
		header('location:index.php');
	
	} elseif (isset($_POST['data']) && $_POST['data'] == '123' && isset($_POST['nama']) && $_POST['nama'] == 'chiput') {
		# code...
		session_start();
		$_SESSION['data'] = $_POST['data'];
		$_SESSION['nama'] = $_POST['nama'];
		header('location:dashboard.php');
	} 
	else {
		header('location:index.php');
	}
}
?>