<?php

  function bilangan($nilai) {
      $angka = array("", "satu", "dua", "tiga", "empat", "lima", "enam", "tujuh", "delapan", "sembilan", "sepuluh", "sebelas");
    $bilang = "";
    if ($nilai <12) {
        $bilang = " ". $angka[$nilai];
    } else if ($nilai <20) {
        $bilang = bilangan($nilai - 10). " belas";
    } else if ($nilai <100) {
        $bilang = bilangan($nilai/10)." puluh". bilangan($nilai % 10);
    } else if ($nilai <200) {
        $bilang = " seratus" . bilangan($nilai - 100);
    } else if ($nilai <1000) {
        $bilang = bilangan($nilai/100) . " ratus" . bilangan($nilai % 100);
    } else if ($nilai <2000) {
        $bilang = " seribu" . bilangan($nilai - 1000);
    } else if ($nilai <1000000) {
        $bilang = bilangan($nilai/1000) . " ribu" . bilangan($nilai % 1000);
    } else if ($nilai <1000000000) {
        $bilang = bilangan($nilai/1000000) . " juta" . bilangan($nilai % 1000000);
    } else if ($nilai <1000000000000) {
        $bilang = bilangan($nilai/1000000000) . " milyar" . bilangan(fmod($nilai,1000000000));
    } else if ($nilai <1000000000000000) {
        $bilang = bilangan($nilai/1000000000000) . " trilyun" . bilangan(fmod($x,1000000000000));
    }     
      return $bilang;
  }
  echo bilangan(3456);

?>