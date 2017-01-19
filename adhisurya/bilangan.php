<?php

  function bilangan($x) {
      $angka = array("", "satu", "dua", "tiga", "empat", "lima","enam", "tujuh", "delapan", "sembilan", "sepuluh", "sebelas");
    $bilang = "";
    if ($x <12) {
        $bilang = " ". $angka[$x];
    } else if ($x <20) {
        $bilang = bilangan($x - 10). " belas";
    } else if ($x <100) {
        $bilang = bilangan($x/10)." puluh". bilangan($x % 10);
    } else if ($x <200) {
        $bilang = " seratus" . bilangan($x - 100);
    } else if ($x <1000) {
        $bilang = bilangan($x/100) . " ratus" . bilangan($x % 100);
    } else if ($x <2000) {
        $bilang = " seribu" . bilangan($x - 1000);
    } else if ($x <1000000) {
        $bilang = bilangan($x/1000) . " ribu" . bilangan($x % 1000);
    } else if ($x <1000000000) {
        $bilang = bilangan($x/1000000) . " juta" . bilangan($x % 1000000);
    } else if ($x <1000000000000) {
        $bilang = bilangan($x/1000000000) . " milyar" . bilangan(fmod($x,1000000000));
    } else if ($x <1000000000000000) {
        $bilang = bilangan($x/1000000000000) . " trilyun" . bilangan(fmod($x,1000000000000));
    }     
      return $bilang;
  }
  echo bilangan(3456);

?>