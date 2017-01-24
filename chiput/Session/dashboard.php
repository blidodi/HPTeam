<?php
session_start();
	if (!isset($_SESSION['data']) && !$_SESSION['data'] == '123' && !isset($_SESSION['nama']) && !$_SESSION['nama'] == 'chiput') {
		header('location:index.php');
	}
?>

Selamat Datang
<b>

<?php echo $_SESSION['nama'] ?>

</b>
</br>
<a href="hapus.php">Exit</a>