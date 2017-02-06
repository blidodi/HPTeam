<?php
include "../model/koneksi.php";
$db = new data_base();

if ($db) {
	echo "Terkoneksi";
}else{
	echo "Koneksi Gagal";
}