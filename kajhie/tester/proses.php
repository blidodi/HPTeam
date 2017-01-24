<?php
	if (isset($_POST['masuk']) && $_POST['masuk'] == 'Masuk') {
		if (empty($_POST['nama']) && empty($_POST['pass'])) {
			header('location:index.php');
		} else if (isset($_POST['pass']) && $_POST['pass'] == '123' && isset($_POST['nama']) && $_POST['nama'] == 'abc') {
			session_start();
			($_SESSION['nama'] = $_POST['nama']);
			($_SESSION['pass'] = $_POST['pass']);
			header('location:dashboard.php');
		}else{
			header('location:index.php');
		}
	}
?>