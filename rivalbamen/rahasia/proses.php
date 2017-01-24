<?php 
	if(isset($_POST['save']) && $_POST['save'] == "Save") {
		if(empty($_POST['data']) && empty($_POST['nama'])) {
			header('location:index.php');
		} else if (isset($_POST['data']) && $_POST['data'] == '123' && isset($_POST['nama']) && $_POST['nama'] == 'Rival') {		  
			session_start();
			$_SESSION['data'] = $_POST['data'];
			$_SESSION['nama'] = $_POST['nama'];
			header('location:dashboard.php');
		} else {
			header('location:index.php');
		}
}

?>