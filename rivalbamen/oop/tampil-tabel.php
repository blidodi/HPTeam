<?php
include "aritmatika.php";
include "tabel.php";

//aritmatika
echo "Aritmatika";
echo "<br/>";
echo $aritmatik->bil1.$aritmatik->operasi.$aritmatik->bil2."=".$aritmatik->hasil();
echo "<br/><br/>";

//tabel kolom
echo "Kolom";
echo $tabel->header();
echo $tabel->body("Kolom1", "Kolom2");
echo $tabel->footer();
echo "<br/>";

//table Binatang
echo "Binatang";
echo $tabel->header();
echo $tabel->binatang($data);
echo $tabel->footer();

?>