<?php require 'belajar-kelas-buku.php'; ?>
<!DOCTYPE html>
<html>
	<head>
		<title>Kelas Buku</title>
		<style>
			input {
				margin: 10px;
				display: block;
			}
		</style>
	</head>
	<body>
		<?php	
			$form = new Form("", "get");
			echo $form->form_header();
			echo $form->form_label("Judul Buku");
			echo $form->form_input("text","judul","");
			echo $form->form_label("Penulis");
			echo $form->form_input("text","penulis","");
			echo $form->form_label("Tahun Terbit");
			echo $form->form_input("text","terbit","");
			echo $form->form_input("submit","tampil","tampil");
			echo $form->form_footer();
		?>
		<?php 

			if(isset($_GET['tampil'])){
				$judul = $_GET['judul'];
				$penulis = $_GET['penulis'];
				$terbit = $_GET['penulis'];
				$simpan = new Buku();
				$simpan->set_buku($judul,$penulis,$terbit);
				echo $simpan->tampil();
			}
		?>
	</body>
</html>
