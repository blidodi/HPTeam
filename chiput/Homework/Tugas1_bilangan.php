<!-- <html>
<head>
  <title>Fungsi terbilang</title>
</head>
<body>
<form action="Tugas1_bilangan.php" method="post">
        Masukkan angka: <input type="text" value="" name="angka">
    <input type="submit" value="Enter">
</form>
<pre>
<?php
//$angka = isset($_POST['angka']) ? $_POST['angka'] : "0";
//if ($angka)
{
 //       echo number_format($angka, 0) . " =";
  //      echo ucwords(Bilangan($angka));
}
?>
</pre>
</body>
</html> -->

<?php
    

    function Bilangan($angka){
      $hurfAngka = array("", "satu", "dua", "tiga", "empat", "lima", "enam", "tujuh", "delapan", "sembilan", "sepuluh", "sebelas");
      if ($angka < 12)
        return " " . $hurfAngka[$angka];
      elseif ($angka < 20)
        return Bilangan ($angka - 10) . " belas";
      elseif ($angka < 100)
        return Bilangan ($angka / 10) . " puluh" . Bilangan ($angka % 10);
      elseif ($angka < 200)
        return " seratus" . Bilangan ($angka - 100);
      elseif ($angka < 1000)
        return Bilangan ($angka / 100) . " ratus" . Bilangan ($angka % 100);
      elseif ($angka < 2000)
        return " seribu" . Bilangan ($angka - 1000);
      elseif ($angka < 1000000)
        return Bilangan ($angka / 1000) . " ribu" . Bilangan ($angka % 1000);
      elseif ($angka < 1000000000)
        return Bilangan ($angka / 1000000) . " juta" . Bilangan ($angka % 1000000);
        elseif ($angka < 1000000000000)
        return Bilangan ($angka / 1000000000) . " milyar" . Bilangan (fmod($angka,1000000000));
    }

    // echo "<h1>" .Bilangan(234345345123). "</h1>" ; 

?>