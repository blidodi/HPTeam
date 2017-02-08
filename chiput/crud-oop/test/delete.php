<?php
$id = $_GET['id'];
if($id){
	include_once '../Table.php';
	$user = new Table('user');
	try{
		$user->deleteBy('user_id', $id);
		header("Location: index.php");
		exit;
	}catch(Exception $e){
		echo "Gagal menghapus user";
		echo '<br/>Error: '.$e->getMessage();
	}
}
