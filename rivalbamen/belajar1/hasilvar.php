<?php 
	require "terbilang.php";
	if(isset($_POST['terbilang'])) {
		echo "<h1>Bukti Kwitansi</h1>"
			."<p>"."No. : ".$_POST['no']."<br/>"
			."Telah diterima dari : ".$_POST['nama']."<br/>"
			."Uang Sejumlah : ".$_POST['jumlah']."<br/>"
			."Terbilang : ".terbilang($_POST['jumlah'])."<br/>"
			."Untuk Pembayaran : ".$_POST['bayar']."</p>";
	}
?>