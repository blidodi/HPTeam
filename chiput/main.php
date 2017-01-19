<?php
		require "Tugas1_bilangan.php";
	 	if (isset($_GET['terbilang'])) {
	 		echo "Nomor = ".($_GET['nomor']) ."</br>";
	 		echo "Diterima Dari = " .($_GET['nama']) ."</br>";
	 		echo "Uang Sejumlah = " . "Rp. ".$_GET['bilangan'] ."</br>";
	 		echo "Terbilang = " .Bilangan($_GET['bilangan']) ."</br>";
	 		echo "Untuk Pembayaran = " .($_GET['namalg']) ."</br>";
	 	}
	 ?>