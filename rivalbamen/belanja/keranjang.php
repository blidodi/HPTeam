<?php 
session_start();    
$sid = session_id();
include "koneksi.php";
echo"<h1>Keranjang Belanja</h1>
          <table border=1>
          <tr>
                <th>Nama Produk</th>
                <th>Qty</th>
                <th>Harga</th>
                <th>Sub Total</th>
          </tr> ";    //jalankan perintah inner join dari tabel keranjang dan produk
$sql = mysql_query("SELECT * FROM belanja, kategori_buku WHERE id_session='$sid' AND belanja.id=kategori_buku.id");       
while($d=mysql_fetch_array($sql)){
        $subtotal    = $d[harga]* $d[jumlah];
        $total       = $total + $subtotal;
        echo"<tr><td>$d[kategori]</td>
            <td>$d[jumlah]</td>
            <td>$d[harga]</td>
            <td>$subtotal</td></tr>";
}
echo"</table>
<h2>Total Belanja : <b>$total</b></h2>
<ul>
<li><a href='daftar_produk.php'>Tambah Barang</a></li>
<li><a href='selesai.php'>Selesai belanja</a></li>
</ul>";
?>