<?php
	$id = $_SESSION['id'];

	include '../model/koneksi.php';

	$db = new data_base();
	// echo $_POST['bday'];

	if (isset($_POST['simpan']) && $_POST['simpan'] == 'Simpan') {
        
    $query = "SELECT `pegawai`.*, `email` as `email` FROM `pegawai` JOIN `user` WHERE `user`.`id_pegawai`='$id' AND `pegawai`.`id_pegawai`='$id'";
    $result = $db->key($query);

    $tampils = mysql_fetch_array($result);
        $foto = $_FILES['foto_pegawai']['name'];
        $extension = end(explode(".", $foto));
         if (!($foto == "")) {
            if (isset($tampils['foto'])) {
                unlink("../img/".$tampils['foto']);
            }
            $random_nama = rand(0000,9999);
            $falidasi = preg_replace("/\s+/", "_", "".$_POST['nama'].".".$extension);
            $new_file = $random_nama."_".$falidasi;
            $photo_path = $_FILES['foto_pegawai']['tmp_name'];
            $directory = "../img/".$new_file;
            move_uploaded_file($photo_path,$directory);

            $query1 = "UPDATE `user` SET email = '".$_POST['email']."' WHERE id_pegawai = $id";
            $result1 = $db->key($query1);

            $query2 = "UPDATE `pegawai` SET id_pegawai = '$id', nik = '".$_POST['nik']."', nama = '".$_POST['nama']."', tempat_lahir = '".$_POST['tl']."', tanggal_lahir = '".$_POST['ttl']."', alamat_ktp = '".$_POST['almt_ktp']."', alamat_sekarang = '".$_POST['almt_skrg']."', agama = '".$_POST['agama']."', status_perkawinan = '".$_POST['status']."', kewarganegaraan = '".$_POST['kewarganegaraan']."', no_telp = '".$_POST['tlp']."', foto = '".$new_file."' WHERE id_pegawai = $id";

            $result2 = $db->key($query2);
                    
                    if(isset($result2)){
                        echo "Data berhasil diubah";
                    } else {
                        echo "Data Tidak berhasil diubah !!!";
                    }
        }else{

        $query1 = "UPDATE `user` SET email = '".$_POST['email']."' WHERE id_pegawai = $id";
        $result1 = $db->key($query1);

        $query2 = "UPDATE `pegawai` SET id_pegawai = '$id', nik = '".$_POST['nik']."', nama = '".$_POST['nama']."', tempat_lahir = '".$_POST['tl']."', tanggal_lahir = '".$_POST['ttl']."', alamat_ktp = '".$_POST['almt_ktp']."', alamat_sekarang = '".$_POST['almt_skrg']."', agama = '".$_POST['agama']."', status_perkawinan = '".$_POST['status']."', kewarganegaraan = '".$_POST['kewarganegaraan']."', no_telp = '".$_POST['tlp']."' WHERE id_pegawai = $id";

        $result2 = $db->key($query2);
                    
                    if(isset($result2)){
                        echo "Data berhasil diubah";
                    } else {
                        echo "Data Tidak berhasil diubah !!!";
                    }
        }
	}
    $querys = "SELECT `pegawai`.*, `email` as `email` FROM `pegawai` JOIN `user` WHERE `user`.`id_pegawai`='$id' AND `pegawai`.`id_pegawai`='$id'";
    $results = $db->key($querys);

    $tampil = mysql_fetch_array($results);
    echo $tampil['nama']
?>
<form action="?page=1" method="post" enctype="multipart/form-data">
<div class="panel-body">
    <div class="table-responsive">
        <table class="table table-striped">
            <tbody>
                <tr>
                    <th>NIK</th>
                    <td>:</td>
                    <td><input type="number" name="nik" class="form-control"  min="0" max="9999999999999999" value="<?php echo $tampil['nik'] ?>"></td>
                </tr>
                    <th style="width: 200px">Nama</th>
                    <td style="width: 5px">:</td>
                    <td><input type="text" name="nama" class="form-control" value="<?php echo $tampil['nama'] ?>"></td>
                </tr>
                <tr>
                    <th>Foto</th>
                    <td>:</td>
                    <td>
                    <?php 
                        if (isset($tampil['foto'])) {
                    ?>
                            <img width="200" height="auto" src="../img/<?php echo $tampil['foto'];?>">
                    <?php
                        }
                    ?>
                    <input type="file" name="foto_pegawai">
                    </td>
                </tr>
                <tr>
                    <th>Tempat Lahir</th>
                    <td>:</td>
                    <td><input type="text" name="tl" class="form-control" value="<?php echo $tampil['tempat_lahir'] ?>"></td>
                </tr>
                <tr>
                    <th>Tanggal Lahir</th>
                    <td>:</td>
                    <td><input type="date" name="ttl" class="form-control" value="<?php echo $tampil['tanggal_lahir'] ?>"></td>
                </tr>
                <tr>
                    <th>Alamat KTP</th>
                    <td>:</td>
                    <td><input type="text" name="almt_ktp"  class="form-control" value="<?php echo $tampil['alamat_ktp'] ?>"></td>
                </tr>
                <tr>
                	<th>Alamat Sekarang</th>
                    <td>:</td>
                    <td><input type="text" name="almt_skrg" class="form-control" value="<?php echo $tampil['alamat_sekarang'] ?>"></td>
                </tr>
                <tr>
                    <th>Agama</th>
                    <td>:</td>
                    <td><input type="text" name="agama" class="form-control" value="<?php echo $tampil['agama'] ?>"></td>
                </tr>
                <tr>
                    <th>Status Perkawinan</th>
                    <td>:</td>
                    <td><input type="text" name="status" class="form-control" value="<?php echo $tampil['status_perkawinan'] ?>"></td>
                </tr>
                <tr>
                    <th>Kewarganegaraan</th>
                    <td>:</td>
                    <td><input type="text" name="kewarganegaraan" class="form-control" value="<?php echo $tampil['kewarganegaraan'] ?>"></td>
                </tr>
                <tr>
                    <th>No. Telp/hp</th>
                    <td>:</td>
                    <td><input type="number" class="form-control" name="tlp" min="0" max="999999999999" value="<?php echo $tampil['no_telp'] ?>"></td>
                </tr>
                <tr>
                    <th>E-mail</th>
                    <td>:</td>
                    <td><input type="email" name="email" class="form-control" value="<?php echo $tampil['email'] ?>"></td>
                </tr>
            </table>
        </div>
        <input class="btn btn-primary" type="submit" name="simpan" value="Simpan">
        <!-- <i class="fa fa-save"></i> Simpan</a>  -->
        <a href="?page=0" class="btn btn-danger"><i class="fa fa-times"></i> Batal</a>
    </div>
</div> 
</form>
<?php
	
?>