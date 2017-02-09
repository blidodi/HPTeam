<?php 
include '../model/sewa-model.php';
$db = new Sewa();

$action = $_GET['action'];
if($action == "add"){
	$db->add_sewa($_POST['tanggal'], $_POST['kembali'], $_POST['member'], $_POST['buku'], $_POST['harga']);
	header("location:../view/penyewaan/sewa-view.php");
}elseif($action == "delete"){ 	
	$db->delete_sewa($_GET['id']);
header("location:../view/penyewaan/sewa-view.php");
}elseif($action == "edit"){
	$db->edit_sewa($_POST['id'], $_POST['tanggal'], $_POST['kembali'], $_POST['member'], $_POST['buku'], $_POST['harga']);
	header("location:../view/penyewaan/sewa-view.php");
}elseif($action == "print"){
	$db->cetak_sewa($_POST['id'], $_POST['tanggal'], $_POST['kembali'], $_POST['member'], $_POST['buku'], $_POST['harga']);
}

?>