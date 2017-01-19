<?php
	
	require "konfigurasi.php";
	if (isset($_POST['terbilang'])) {
		echo "<p>".$_POST['no']."<br/>".$_POST['nama']."<br/>".bilangan($_POST['bilangan'])."<br/>"
			.$_POST['pembayaran']."</p>";
	}

?>