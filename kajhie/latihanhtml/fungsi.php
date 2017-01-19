<?php

function fungsi1($x)
{
  $abil = array("", "satu", "dua", "tiga", "empat", "lima", "enam", "tujuh", "delapan", "sembilan", "sepuluh", "sebelas");
  if ($x < 12)
    return " " . $abil[$x];
  elseif ($x < 20)
    return fungsi1($x - 10) . "belas";
  elseif ($x < 100)
    return fungsi1($x / 10) . " puluh" . fungsi1($x % 10);
  elseif ($x < 200)
    return " seratus" . fungsi1($x - 100);
  elseif ($x < 1000)
    return fungsi1($x / 100) . " ratus" . fungsi1($x % 100);
  elseif ($x < 2000)
    return " seribu" . fungsi1($x - 1000);
  elseif ($x < 1000000)
    return fungsi1($x / 1000) . " ribu" . fungsi1($x % 1000);
  elseif ($x < 1000000000)
    return fungsi1($x / 1000000) . " juta" . fungsi1($x % 1000000);
}

?>