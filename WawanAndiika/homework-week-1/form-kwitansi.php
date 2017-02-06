<html>
	<head>
		<title>Kwitansi Page</title>
        <link rel="stylesheet" href="styles.css"/>
	</head>
	<body style="background: #2C78A5;">
        <div class="login">
            <div class="logo-login">
            <center>
                <h1><b>HP</b>KWITANSI</h1>
            </center>
            </div>
            <div class="login-wrapper">
                <form method="GET" action="">
                    <p><input name="nomer" value="" placeholder="Masukan nomer kwitansi.." type="number"></p>
                    <p><input name="nama" value="" placeholder="Masukan nama.. " type="text"></p>
                    <p><input name="nominal" value="" placeholder="Masukan nominal.. " type="text"></p>
                    <p><input name="pembayaran" value="" placeholder="Masukan pembayaran untuk.. " type="text"></p>
                    <p class="submit"><button name="cetak" value="Cetak" type="submit" style="margin-top:35px;">Cetak</button></p>
                    <div class="clear">
                </form>
                <?php
                    if (isset($_GET['cetak'])) { ?>
                        <fieldset>
                        <legend><h2>Kwitansi</h2></legend>
                        <table style="font-size: 12px;">
                            <tr>
                                <td>Nomor</td>
                                <td>:</td>
                                <td><?php echo ($_GET['nomer']) ."</br>";?></td>
                            </tr>
                            <tr>
                                <td>Sudah Diterima dari</td>
                                <td>:</td>
                                <td><?php echo ($_GET['nama']) ."</br>";?></td>
                            </tr>
                            <tr>
                                <td>Nominal</td>
                                <td>:</td>
                                <td><?php echo "Rp. ".$_GET['nominal'] ."</br>"; ?></td>
                            </tr>
                            <tr>
                                <td>Untuk Pembayaran</td>
                                <td>:</td>
                                <td><?php echo ($_GET['pembayaran']) ."</br>"; ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Terbilang</td>
                                <td>:</td>
                                <td><?php echo Bilangan($_GET['nominal']) ."rupiah"; ?></td>
                            </tr>
                    </table>
                    </fieldset>
                <?php } ?>
                <?php
                  function bilangan($an) {
                      $angka = array("", "satu", "dua", "tiga", "empat", "lima","enam", "tujuh", "delapan", "sembilan", "sepuluh", "sebelas");
                    $bilang = "";
                    if ($an <12) {
                        $bilang = " ". $angka[$an];
                    } else if ($an <20) {
                        $bilang = bilangan($an - 10). " belas";
                    } else if ($an <100) {
                        $bilang = bilangan($an/10)." puluh". bilangan($an % 10);
                    } else if ($an <200) {
                        $bilang = " seratus" . bilangan($an - 100);
                    } else if ($an <1000) {
                        $bilang = bilangan($an/100) . " ratus" . bilangan($an % 100);
                    } else if ($an <2000) {
                        $bilang = " seribu" . bilangan($an - 1000);
                    } else if ($an <1000000) {
                        $bilang = bilangan($an/1000) . " ribu" . bilangan($an % 1000);
                    } else if ($an <1000000000) {
                        $bilang = bilangan($an/1000000) . " juta" . bilangan($an % 1000000);
                    } else if ($an <1000000000000) {
                        $bilang = bilangan($an/1000000000) . " milyar" . bilangan(fmod($an, 1000000000));
                    } else if ($an <1000000000000000) {
                        $bilang = bilangan($an/1000000000000) . " trilyun" . bilangan(fmod($an,1000000000000));
                    }     
                      return $bilang;
                  }
                ?>
            </div>
        </div>
    </body>
</html>