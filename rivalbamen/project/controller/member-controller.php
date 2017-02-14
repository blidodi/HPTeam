<?php 
include '../model/member-model.php';
$db = new Member();

$action = $_GET['action'];
if($action == "add"){
	$db->add_member($_POST['no_member'], $_POST['nama'], $_POST['alamat'], $_POST['telpon']);
	header("location:../view/member/member-view.php");
}elseif($action == "delete"){ 	
	$db->delete_member($_GET['id']);
header("location:../view/member/member-view.php");
}elseif($action == "edit"){
	$db->edit_member($_POST['id'], $_POST['no_member'], $_POST['nama'], $_POST['alamat'], $_POST['telpon']);
	header("location:../view/member/member-view.php");
}

?>