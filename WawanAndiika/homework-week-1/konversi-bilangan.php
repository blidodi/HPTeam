<!DOCTYPE html>
<html>
<head>
    <title>Konversi Bilangan</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container" style="width: 500px;">
        <br/>
        <div class="col-md-12">
            <div class="form-group">
                <form action"" method="POST">
                    <div class="input-group">
                        <input name="bilangan" type="number" class="form-control" placeholder="angka yang mau di konversi....." aria-describedby="basic-addon2" />
                        <span class="input-group-addon" id="basic-addon2">Convert!!</span>
                    </div>
                    <br>
                    <input class="btn btn-primary" type="submit" name="submit" value="submit" style="margin-bottom: 20px;">
                </form>
                <?php
                      if(isset($_POST['submit'])){
                        $bilangan = $_POST['bilangan'];
                        echo 
                        "<div class='alert alert-success'>"
                        .bilangan($bilangan).
                        "</div>";
                      }
                ?>
            </div>
        </div>
    </div>
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
</body>
</html>