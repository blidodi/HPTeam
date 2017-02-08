<?php 
	include "header.php"; 
	if(isset($_GET['act'])){
		switch ($_GET['act']) {
			case 'bayar':
				include "model/gaji/bayar.php";
				break;
			default:
				include "templates/404.php";
		}
	} if(!isset($_GET['act'])){ 
		$pegawai = new Gaji();
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
	                <a href="/page/gaji/bayar/<?= $result['id_pegawai']?>/" class="btn btn-info btn-xs" role="button">Proccess Gaji</a>
	            </div>
	          </div>
	        </div>   
	    <?php } ?>  
	<?php } ?>
<?php include "footer.php"; ?> 