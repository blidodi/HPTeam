<?php 
include '../model/kembali-model.php';
$db = new Kembali();

$action = $_GET['action'];
if($action == "add"){
	$db->add_kembali($_POST['tgl_kembali'], $_POST['member'], $_POST['buku'], $_POST['denda']);
	header("location:../view/pengembalian/kembali-view.php");
}elseif($action == "delete"){ 	
	$db->delete_kembali($_GET['id']);
header("location:../view/pengembalian/kembali-view.php");
}elseif($action == "edit"){
	$db->edit_kembali($_POST['id'], $_POST['tgl_kembali'], $_POST['member'], $_POST['buku'], $_POST['denda']);
	header("location:../view/pengembalian/kembali-view.php");
}

?>