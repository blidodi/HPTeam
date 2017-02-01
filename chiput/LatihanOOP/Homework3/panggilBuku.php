<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="styleForm.css">
</head>
<body>
<div class="body"></div>
		<div class="grad"></div>
		<div class="headerlogin">
			<div>Peminjaman<br><span>Buku</span></div>
		</div>
<div class="login">
<?php

	require "book.php";

	$formbuku = new Buku("panggilBuku.php","get");

	echo $formbuku->form_header();
	echo $formbuku->form_label("Nama Lengkap");
	echo "<br>";
	echo $formbuku->form_input("text","nama","","fieldinput2");
	echo "<br>";
	echo $formbuku->form_label("Jenis Buku");
	echo "<br>";
	echo $formbuku->form_input("text","jenisbuku","","fieldinput2");
	echo "<br>";
	echo $formbuku->form_label("Judul Buku");
	echo "<br>";
	echo $formbuku->form_input("text","judul","","fieldinput2");
	echo "<br>";
	echo $formbuku->form_label("Tahun");
	echo "<br>";
	echo $formbuku->form_input("text","tahun","","fieldinput2");
	echo "<br>";
	echo $formbuku->form_input("submit","simpan","Simpan","buttonLogin");
	echo "<br>";
	echo $formbuku->form_footer();

	if (isset($_GET['simpan'])) {
		<a href="tampilBuku.php"></a>
	}
?>
</div>
</body>
</html>