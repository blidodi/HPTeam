<?php 
include '../model/user-model.php';
$db = new User();

$action = $_GET['action'];
if($action == "add"){
	$db->add_users($_POST['nama'], $_POST['username'], $_POST['password']);
	header("location:../view/user/user-view.php");
}elseif($action == "delete"){ 	
	$db->delete_users($_GET['id']);
header("location:../view/user/user-view.php");
}elseif($action == "edit"){
	$db->edit_users($_POST['id'], $_POST['nama'], $_POST['username'], $_POST['password']);
	header("location:../view/user/user-view.php");
}

?>