<?php 
include '../model/buku-model.php';
$db = new Buku();

$action = $_GET['action'];
if($action == "add"){
	$db->add_buku($_POST['judul'], $_POST['pengarang'], $_POST['penerbit'], $_POST['tahun'], $_POST['isbn'], $_POST['harga']);
	header("location:../view/buku/buku-view.php");
}elseif($action == "delete"){ 	
	$db->delete_buku($_GET['id']);
header("location:../view/buku/buku-view.php");
}elseif($action == "edit"){
	$db->edit_buku($_POST['id'], $_POST['judul'], $_POST['pengarang'], $_POST['penerbit'], $_POST['tahun'], $_POST['isbn'], $_POST['harga']);
	header("location:../view/buku/buku-view.php");
}

?>