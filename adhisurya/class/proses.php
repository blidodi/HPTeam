<?php 
include 'database.php';
$db = new database();

$aksi = $_GET['aksi'];
 if($aksi == "tambah"){
 	$db->input($_POST['isbn'],$_POST['nama'],$_POST['penulis'],$_POST['penerbit']);
 	header("location:tampil.php");
 }elseif($aksi == "hapus"){ 	
 	$db->hapus($_GET['id']);
	header("location:tampil.php");
 }elseif($aksi == "update"){
 	$db->update($_POST['isbn'],$_POST['nama'],$_POST['penulis'],$_POST['penerbit']);
 	header("location:tampil.php");
 }
?>