<?php require "header.php"; ?>

<h1>Form Kwitansi</h1>
<form action="hasilvar.php" method="post">
	No : <input type="text" name="no" /><br/>
	Telah di Terima dari : <input type="text" name="nama" /><br/>
	Uang Sejumlah : <input type="text" name="jumlah" value="<?php echo @$_POST['jumlah'] ?>" /><br/>
	Untuk Pembayaran : <input type="text" name="bayar" /><br/>
			<input type="submit" name="terbilang" value="Tampilkan"/>
</form>

<?php require "footer.php"; ?>