<?php 
session_start();
include "koneksi.php";
$sid = session_id();
 
 
//di cek dulu apakah barang yang di beli sudah ada di tabel keranjang
$sql = mysql_query("SELECT id FROM belanja WHERE id='$_GET[id]' AND id_session='$sid'");
    $ketemu=mysql_num_rows($sql);
    if ($ketemu==0){
        // kalau barang belum ada, maka di jalankan perintah insert
        mysql_query("INSERT INTO belanja (id, jumlah, id_session)
                VALUES ('$_GET[id]', 1, '$sid')");
    } else {
        //  kalau barang ada, maka di jalankan perintah update
        mysql_query("UPDATE belanja
                SET jumlah = jumlah + 1
                WHERE id_session ='$sid' AND id_produk='$_GET[id]'");       
    }   
    header('Location:keranjang.php');
 
?>