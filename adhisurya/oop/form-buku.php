<!DOCTYPE html>
<html>
<head>
	<title>Test Form</title>
	<style>
		input {
			margin-top: 10px;
			display: block;
		}
	</style>
</head>
<body>

<?php
	require "kelas-buku.php";

	$form = new Form("form-buku.php", "get");

	echo $form->form_header();
	echo $form->form_label("Judul");
	echo $form->form_input("text", "judul", "");
	echo $form->form_label("Pengarang");
	echo $form->form_input("text", "nama", "");
	echo $form->form_label("Penerbit");
	echo $form->form_input("text", "nama", "");
	echo $form->form_label("ISBN");
	echo $form->form_input("text", "nama", "");
	echo $form->form_input("submit", "login", "Login");
	echo $form->form_footer();

	if(isset($_GET['login'])) {
		echo $_GET['nama'];
		echo "<br/>";
		echo $_GET['password'];
	}
?>

</body>
</html>