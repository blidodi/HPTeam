<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="styleLogin.css">
</head>
<body>
<div class="body"></div>
		<div class="grad"></div>
		<div class="headerlogin">
			<div>Silahkan<span>Login</span></div>
		</div>
<div class="login">
<?php

	require "form.php";

	$form = new Form("formLogin.php","get");

	echo $form->form_header();
	echo $form->form_label("");
	echo $form->form_input("text","username","username","fieldinput2");
	echo $form->form_label("");
	echo $form->form_input("password","password","password","fieldinput3");
	echo $form->form_input("submit","login","Login","buttonLogin");
	echo $form->form_footer();

	if (isset($_GET['pesan']) && !empty($_GET['pesan'])) {
				# code...
				switch ($_GET['pesan']) {
					case 1:
						$pesan = "Masukkan User dan Password Anda";
						break;
					case 2:
						$pesan = "User dan Password Anda Salah";
						break;
					default;
						$pesan = "Anda Tidak Berhak Mengakses Pesan Ini";
				}
				echo "Pesan : ".$pesan;
			}
?>
</div>
</body>
</html>