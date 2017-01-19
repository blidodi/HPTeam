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
$angka = isset($_POST['angka']) ? $_POST['angka'] : "0";
if ($angka)
{
        echo number_format($angka, 0) . " =";
        echo ucwords(Bilangan($angka));
}
?>
</pre>
</body>
</html> -->

<?php
    

    function Bilangan($x){

      $hurfAngka = array("", "satu", "dua", "tiga", "empat", "lima", "enam", "tujuh", "delapan", "sembilan", "sepuluh", "sebelas");
      if ($x < 12)
        return " " . $hurfAngka[$x];
      elseif ($x < 20)
        return Bilangan ($x - 10) . "belas";
      elseif ($x < 100)
        return Bilangan ($x / 10) . " puluh" . Bilangan ($x % 10);
      elseif ($x < 200)
        return " seratus" . Bilangan ($x - 100);
      elseif ($x < 1000)
        return Bilangan ($x / 100) . " ratus" . Bilangan ($x % 100);
      elseif ($x < 2000)
        return " seribu" . Bilangan ($x - 1000);
      elseif ($x < 1000000)
        return Bilangan ($x / 1000) . " ribu" . Bilangan ($x % 1000);
      elseif ($x < 1000000000)
        return Bilangan ($x / 1000000) . " juta" . Bilangan ($x % 1000000);
    }

    echo "<h1>" .Bilangan(400000). "</h1>" ;

?>