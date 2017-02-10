<div class="col-lg-12">
    <div class="panel-body">
        <div class="table-responsive">
            <table class="table table-striped">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>NIK</th>
                    <th>Nama</th>
                    <th>Gaji Pokok</th>
                    <th>Bonus Lembur</th>
                    <th>Bonus Projek</th>
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
                <td><?php echo $no ?></td>
                <td><?php echo $tampil['nik']?></td>
                <td><?php echo $tampil['nama']?></td>
                <td><input type="number" name="gaji" class="form-control" min=0 max=99999999999 disabled></td>
                <td><input type="number" name="lemur" class="form-control" min=0 max=99999999999></td>
                <td><input type="number" name="projek" class="form-control" min=0 max=99999999999></td>
            </tr>
<?php
$no++;
}
?>
            </tbody>
        </table>
    </div>
</div>