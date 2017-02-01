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

require "panggilBuku.php";

if (isset($_GET['simpan'])) {
		echo $_GET->form_input("text","nama","","fieldinput2");
		echo "</br>";
		echo $_GET->form_input("text","jenisbuku","","fieldinput2");
		echo "</br>";
		echo $_GET->form_input("text","judul","","fieldinput2");
		echo "</br>";
		echo $_GET->form_input("text","tahun","","fieldinput2");
	}
?>

</div>
</body>
</html>