<!DOCTYPE html>
<html>
<head>
	<title>Tambah User</title>
	<style>
			input {
				margin: 8px 0;
				display: block;
			}
		</style>
</head>
<body>

	<?php
		$form = new Form('','POST');
		echo $form->header();
		echo $form->label('Username');
		echo $form->input('text','username','Masukan Username');
		echo $form->label('Password');
		echo $form->input('password','password','Masukan Password');
		echo $form->input('submit','simpan','');
		echo $form->footer();
	?>
	<?php 

		if(isset($_POST['simpan'])){

			$simpan = new Db_con();
			$username = $_POST['username'];
			$pass = $_POST['password'];
			if($username==""||$pass==""){
				echo 'Lengkapi Data Diatas Terlebih Dahulu';
			} else {
				$simpan->insert($username,$pass);
			}
		}
	?>
</body>
</html>