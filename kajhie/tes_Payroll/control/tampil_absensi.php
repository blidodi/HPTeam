<?php
    if (isset($_POST['simpan']) && $_POST['simpan'] == 'Simpan') {
        include "../control/simpan_absensi_pegawai.php";
    }else{
?>
<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
<div class="col-lg-3">
    <input class="btn btn-primary" type="submit" name="simpan" value="Simpan">
</div>

<div class="col-lg-3">
    <label>Tanggal :  <input type="date" name="tanggal" class="form-control"></label>
</div>
<div class="col-lg-3">
    <label>Keterangan : 
        <select class="form-control" >
            <option>-- Pilih Keterangan --</option>
        </select>
    </label> 
    
</div>

<div class="col-lg-12">
    <div class="panel-body">
        <div class="table-responsive">
            <table class="table table-striped">
            <thead>
                <tr>
                    <th></th>
                    <th>No.</th>
                    <th>NIK</th>
                    <th>Nama</th>
                    <th>Tanggal</th>
                    <th>Keterangan</th>
                </tr>
            </thead>
            <tbody>
<?php
    include '../model/koneksi.php';

    $db = new data_base();

    $query = "SELECT * FROM `pegawai`";
    $result = $db->key($query);

    $no=1;
    while ($tampil = mysql_fetch_array($result)) {
?>
            <tr>
                <td><input type="checkbox" name=""><input type="hidden" name="id[]" value="<?php echo $tampil['id_pegawai']?>"></td>
                <td><?php echo $no ?></td>
                <td><?php echo $tampil['nik']?></td>
                <td><?php echo $tampil['nama']?></td>
                <td><input type="date" name="tanggal[]" class="form-control"></td>
                <td><select class="form-control" name="absen[]">
                    <?php
                        foreach ($keterangan_absensi as $key => $value) {
                            ?>
                            <option value="<?php echo $key ?>"><?php echo $value ?></option>
                            <?php
                        }
                        ?>
                    </select>
                </td>
            </tr>
<?php
    $no++;
    }
?>
            </tbody>
        </table>
    </div>
    </form>
    <?php
        }
    ?>
</div>