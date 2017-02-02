<?php 
include 'database.php';
$db = new Database();

$action = $_GET['action'];
 if($action == "tambah"){
 	$db->tambah_buku($_POST['isbn'], $_POST['judul'], $_POST['pengarang'], $_POST['penerbit']);
 	header("location:index.php");
 }elseif($action == "hapus"){ 	
 	$db->hapus_buku($_GET['id']);
	header("location:index.php");
 }elseif($action == "ubah"){
 	$db->ubah_buku($_POST['id'], $_POST['isbn'], $_POST['judul'], $_POST['pengarang'], $_POST['penerbit']);
 	header("location:index.php");
 }
?>