<?php 
include 'database.php';
$db = new database();

//aksi user
$aksi = $_GET['aksi'];
 if($aksi == "tambah"){
 	$db->input_user($_POST['kode_user'],$_POST['nama'],$_POST['username'],$_POST['password']);
 	header("location:tampil_user.php");
 }elseif($aksi == "hapus"){ 	
 	$db->hapus_user($_GET['id']);
	header("location:tampil_user.php");
 }elseif($aksi == "update"){
 	$db->update($_POST['id'],$_POST['kode_user'],$_POST['nama'],$_POST['username'],$_POST['password']);
 	header("location:tampil_user.php");
 }

//aksi buku
 $aksi = $_GET['aksi'];
 if($aksi == "tambah"){
 	$db->input_buku($_POST['kode_buku'],$_POST['isbn'],$_POST['judul'],$_POST['penulis'],$_POST['penerbit']);
 	header("location:tampil_buku.php");
 }elseif($aksi == "hapus"){ 	
 	$db->hapus_buku($_GET['id']);
	header("location:tampil_buku.php");
 }elseif($aksi == "update"){
 	$db->update($_POST['id'],$_POST['kode_buku'],$_POST['isbn'],$_POST['judul'],$_POST['penulis'],$_POST['penerbit']);
 	header("location:tampil_buku.php");
 }
?>