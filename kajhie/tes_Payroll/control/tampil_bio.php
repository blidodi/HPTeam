<?php
	// session_start();
	$id = $_SESSION['id'];
	include '../model/koneksi.php';

	$db = new data_base();

	$query = "SELECT `pegawai`.*, `email` as `email` FROM `pegawai` JOIN `user` WHERE `user`.`id_pegawai`='$id' AND `pegawai`.`id_pegawai`='$id'";
	$result = $db->key($query);

	while ($tampil = mysql_fetch_array($result)) {

?>
<a href="?page=1" class="btn btn-success"><i class="fa fa-edit"></i> Perbarui Biodata</a>
	<div class="panel-body">
		<div class="table-responsive">
        	<table class="table table-striped">
            <tbody>
            	<tr>
            		<th>NIK</th>
                    <td>:</td>
                    <td><?php echo $tampil['nik'] ?></td>
				</tr>
                    <th style="width: 200px">Nama</th>
                    <td style="width: 5px">:</td>
                    <td><?php echo $tampil['nama'] ?></td>
                </tr>
                <tr>
                    <th>Tempat Lahir</th>
                    <td>:</td>
                    <td><?php echo $tampil['tempat_lahir'] ?></td>
                </tr>
                <tr>
                    <th>Tanggal Lahir</th>
                    <td>:</td>
                    <td><?php echo $tampil['tanggal_lahir'] ?></td>
                </tr>
                <tr>
                    <th>Alamat KTP</th>
                    <td>:</td>
                    <td><?php echo $tampil['alamat_ktp'] ?></td>
                </tr>
                <tr>
                    <th>Alamat Sekarang</th>
                    <td>:</td>
                    <td><?php echo $tampil['alamat_sekarang'] ?></td>
                </tr>
                <tr>
                	<th>Agama</th>
                    <td>:</td>
                    <td><?php echo $tampil['agama'] ?></td>
                </tr>
                <tr>
                    <th>Status Perkawinan</th>
                    <td>:</td>
                    <td><?php echo $tampil['status_perkawinan'] ?></td>
                </tr>
                <tr>
                    <th>Kewarganegaraan</th>
                    <td>:</td>
                    <td><?php echo $tampil['kewarganegaraan'] ?></td>
                </tr>
                <tr>
                    <th>No. Telp/hp</th>
                    <td>:</td>
                    <td><?php echo $tampil['no_telp'] ?></td>
                </tr>
                <tr>
                    <th>E-mail</th>
                    <td>:</td>
                    <td><?php echo $tampil['email'] ?></td>
                </tr>
            </table>
        </div>
    </div>
<?php
	}
?>