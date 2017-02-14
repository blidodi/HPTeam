
<div class="col-lg-12">
    <form action="admin_gaji.php" enctype="multypart/form-data">
    <input class="btn btn-primary" type="submit" name="simpan" value="Simpan">
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-striped">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>NIK</th>
                        <th>Nama</th>
                        <th>Tanggal</th>
                        <th>Bonus Lembur</th>
                        <th>Bonus Projek</th>
                    </tr>
                </thead>
                <tbody>
<?php
    include '../model/koneksi.php';

    $db = new data_base();

    $query = "SELECT `pegawai`.*, `user`.*, `gaji_pokok` as `gaji` FROM `pegawai`,`user` JOIN `level` ON `user`.`level` = `level`.`gaji_poko` WHERE `pegawai`.`id_pegawai` = 1 and `user`.`id_pegawai` = 1";
    $result = $db->key($query);

    $no=1;
    while ($tampil = mysql_fetch_array($result)) {
?>
            <tr>
                <td><?php echo $no ?></td>
                <td><?php echo $tampil['nik']?></td>
                <td><?php echo $tampil['nama']?></td>
                <td><input type="date" name="tanggal" class="form-control"></td>
                <td><input type="number" name="gaji_pokok" class="form-control" min=0 max=99999999999 disabled></td>
                <td>
                    <select class="form-control">
                        <option>--pilih Bonus--</option>
                    </select>
                </td>
                <!-- <td><input type="number" name="bonus" class="form-control" min=0 max=99999999999></td> -->
            </tr>
<?php
$no++;
}
?>
                    </tbody>
                    </table>
                </div>
            </div>
        </form>
    </div>