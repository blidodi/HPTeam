<?php
	include "header.php"; 
	$pegawai = new Pegawai();
	$query = $pegawai->showpegawai();
	while($result = mysqli_fetch_array($query)){ 
	?>
        <div class="col-xs-18 col-sm-6 col-md-3">
          <div class="thumbnail">
            <img src="/img/karyawan/<?= $result['foto']?>">
              <div class="caption">
                <h4><?= $result['nama_pegawai']; ?></h4>
                <p><b>Jabatan: </b><?php $jabatan = new Gaji(); echo $jabatan->jabatannya($result['id_jabatan']);?></p>
                <a href="/page/pegawai/edit/<?= $result['id_pegawai']?>/" class="btn btn-default btn-xs pull-right" role="button"><i class="glyphicon glyphicon-edit"></i></a> 
                <a href="#" class="btn btn-info btn-xs" role="button">Bayar Gaji</a>
            </div>
          </div>
        </div>     

<?php }
	include "footer.php";