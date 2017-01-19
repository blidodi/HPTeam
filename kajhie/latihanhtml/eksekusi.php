<?php
include "fungsi.php";
if (isset($_POST['terbilang'])) {
 	echo "<p>"."no : ".$_POST['no']."</br>"."Diterima Dari : ".$_POST['diterima']."</br>"."Nominal uang : Rp. ".$_POST['nominal']."</br>"."untuk Pembayaran : ".$_POST['untuk']."</br>".fungsi1($_POST['nominal'])."rupiah</p>";
 } 
 ?>