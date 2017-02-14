<?php 
session_start();    
include "koneksi.php"; 
echo"<h1>Daftar Produk</h1>
     <ul>";
$r=mysql_query("SELECT * FROM kategori_buku");

while($d=mysql_fetch_array($r)){
        echo"<li>$d[kategori] : $d[harga] || <a href='aksi_keranjang.php?id=$d[id]'>Beli</a></li>";
        }
echo"</ul>";
?>