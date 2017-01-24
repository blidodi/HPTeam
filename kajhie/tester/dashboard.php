<?php
session_start();
	if (!isset($_SESSION['pass']) && !$_SESSION['pass'] == '123' && !isset($_SESSION['nama']) && !$_SESSION['nama'] == 'abc') {
		header('location:index.php');
	}
?>

selamat datang di <b><?php echo $_SESSION['nama']?></b>
<br/>
<a href="hapus.php">Keluar</a>