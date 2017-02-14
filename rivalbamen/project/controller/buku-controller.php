<?php 
include '../model/buku-model.php';
$db = new Buku();

$action = $_GET['action'];
if($action == "add"){
	$ekstensi_diperbolehkan	= array('png','jpg');
	$cover = $_FILES['cover']['name'];
	$x = explode('.', $cover);
	$ekstensi = strtolower(end($x));
	$ukuran	= $_FILES['cover']['size'];
	$file_tmp = $_FILES['cover']['tmp_name'];	
	if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
		if($ukuran < 1044070){			
			move_uploaded_file($file_tmp, '../image/'.$cover);
			$db->add_buku($_POST['judul'], $_POST['pengarang'], $_POST['penerbit'], $_POST['tahun'], $_POST['isbn'], $_POST['kategori'], $_FILES['cover']['name']);						
			header("location:../view/buku/buku-view.php");
				//echo 'FILE BERHASIL DI UPLOAD';
		}else{
			echo 'UKURAN FILE TERLALU BESAR';
		}
	}else{
		echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
	}
	
}elseif($action == "delete"){ 	
	$db->delete_buku($_GET['id']);
header("location:../view/buku/buku-view.php");
}elseif($action == "edit"){

	if($_FILES['cover']['name']  != '') {
		$ekstensi_diperbolehkan	= array('png','jpg');
		$cover = $_FILES['cover']['name'];
		$x = explode('.', $cover);
		$ekstensi = strtolower(end($x));
		$ukuran	= $_FILES['cover']['size'];
		$file_tmp = $_FILES['cover']['tmp_name'];	
		if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
			if($ukuran < 1044070){			
				move_uploaded_file($file_tmp, '../image/'.$cover);
				$db->edit_buku($_POST['id'], $_POST['judul'], $_POST['pengarang'], $_POST['penerbit'], $_POST['tahun'], $_POST['isbn'], $_POST['kategori'], $_FILES['cover']['name']);
				header("location:../view/buku/buku-view.php");
			}else{
				echo 'UKURAN FILE TERLALU BESAR';
			}
		}else{
			echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
		}
	} else {
		$db->edit_book($_POST['id'], $_POST['judul'], $_POST['pengarang'], $_POST['penerbit'], $_POST['tahun'], $_POST['isbn'], $_POST['kategori']);
		header("location:../view/buku/buku-view.php");
	}
	
} 

?>