<?php
    //include "form-buku.php";

if(isset($_GET['simpan'])) 
    {
		echo $_GET['judul'];
		echo "<br/>";
		echo $_GET['penulis'];
		echo "<br/>";
		echo $_GET['penerbit'];
		echo "<br/>";
		echo $_GET['tahun'];
    }

?>