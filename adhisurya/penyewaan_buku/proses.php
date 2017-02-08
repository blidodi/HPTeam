<?php 
include 'database.php';
$db = new database();

//aksi user
$aksi = $_GET['aksi'];
 	if($aksi == "tambah_user"){
 		$db->input_user($_POST['kode_user'],$_POST['nama'],$_POST['username'],$_POST['password']);
 		header("location:user/tampil_user.php");
 	}elseif($aksi == "hapus_user"){ 	
 		$db->hapus_user($_GET['id']);
		header("location:user/tampil_user.php");
 	}elseif($aksi == "update_user"){
 		$db->update_user($_POST['id'],$_POST['kode_user'],$_POST['nama'],$_POST['username'],$_POST['password']);
 		header("location:user/tampil_user.php");
 	}


//aksi buku
$aksi = $_GET['aksi'];
 	if($aksi == "tambah_buku"){
 		$db->input_buku($_POST['kode_buku'],$_POST['isbn'],$_POST['judul'],$_POST['penulis'],$_POST['penerbit'],$_POST['tahun_terbit'],$_POST['jenis']);
 		header("location:buku/tampil_buku.php");
	}elseif($aksi == "hapus_buku"){ 	
 		$db->hapus_buku($_GET['id']);
		header("location:buku/tampil_buku.php");
	}elseif($aksi == "update_buku"){
 		$db->update_buku($_POST['id'],$_POST['kode_buku'],$_POST['isbn'],$_POST['judul'],$_POST['penulis'],$_POST['penerbit'],$_POST['tahun_terbit'],$_POST['jenis']);
 		header("location:buku/tampil_buku.php");
 	}


//aksi member
$aksi = $_GET['aksi'];
 	if($aksi == "tambah_member"){
 		$db->input_member($_POST['kode_member'],$_POST['nama'],$_POST['alamat'],$_POST['foto']);
 		header("location:member/tampil_member.php");
	}elseif($aksi == "hapus_member"){ 	
 		$db->hapus_member($_GET['id']);
		header("location:member/tampil_member.php");
	}elseif($aksi == "update_member"){
 		$db->update_member($_POST['id'],$_POST['kode_member'],$_POST['nama'],$_POST['alamat'],$_POST['foto']);
 		header("location:member/tampil_member.php");
 	}


//aksi penyewa
$aksi = $_GET['aksi'];
 	if($aksi == "tambah_penyewa"){
 		$db->input_penyewa($_POST['kode_sewa'],$_POST['kode_user'],$_POST['kode_buku'],$_POST['kode_member'],$_POST['tanggal_pinjam'],$_POST['tanggal_kembali']);
 		header("location:penyewa/tampil_penyewa.php");
	}elseif($aksi == "hapus_penyewa"){ 	
 		$db->hapus_penyewa($_GET['id']);
		header("location:penyewa/tampil_penyewa.php");
	}elseif($aksi == "update_penyewa"){
 		$db->update_penyewa($_POST['id'],$_POST['kode_sewa'],$_POST['kode_user'],$_POST['kode_buku'],$_POST['kode_member'],$_POST['tanggal_pinjam'],$_POST['tanggal_kembali']);
 		header("location:penyewa/tampil_penyewa.php");
 	}


//aksi pengembalian
$aksi = $_GET['aksi'];
 	if($aksi == "tambah_pengembalian"){
 		$db->input_pengembalian($_POST['kode_kembali'],$_POST['kode_user'],$_POST['kode_buku'],$_POST['kode_member'],$_POST['tanggal_kembali'],$_POST['total_denda']);
 		header("location:pengembalian/tampil_pengembalian.php");
	}elseif($aksi == "hapus_pengembalian"){ 	
 		$db->hapus_pengembalian($_GET['id']);
		header("location:pengembalian/tampil_pengembalian.php");
	}elseif($aksi == "update_pengembalian"){
 		$db->update_pengembalian($_POST['id'],$_POST['kode_kembali'],$_POST['kode_user'],$_POST['kode_buku'],$_POST['kode_member'],$_POST['tanggal_kembali'],$_POST['total_denda']);
 		header("location:pengembalian/tampil_pengembalian.php");
 	}


//aksi kwitansi
$aksi = $_GET['aksi'];
 	if($aksi == "tambah_kwitansi"){
 		$db->input_kwitansi($_POST['no'],$_POST['nama'],$_POST['uang_sejumlah'],$_POST['untuk_pembayaran'],$_POST['status']);
 		header("location:kwitansi/tampil_kwitansi.php");
	}elseif($aksi == "hapus_kwitansi"){ 	
 		$db->hapus_kwitansi($_GET['id']);
		header("location:kwitansi/tampil_kwitansi.php");
	}elseif($aksi == "update_kwitansi"){
 		$db->update_kwitansi($_POST['id'],$_POST['no'],$_POST['nama'],$_POST['uang_sejumlah'],$_POST['untuk_pembayaran'],$_POST['status']);
 		header("location:kwitansi/tampil_kwitansi.php");
 	}
?>