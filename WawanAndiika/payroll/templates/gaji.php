<?php 
	include "header.php"; 
	if(isset($_GET['act'])){
		switch ($_GET['act']) {
			case 'bayar':
				include "model/gaji/bayar.php";
				break;
			case 'list':
				if(isset($_GET['id'])) {
					include "model/gaji/proses.php";
				} else {
					include "model/gaji/list.php";
				}
				break;
			case 'print';
				if(isset($_GET['id'])) {
					include "model/gaji/print.php";
				}
				break;
			default:
				include "templates/404.php";
		}
	} if(!isset($_GET['act'])){ 	
		$pegawai = new Gaji();
		$query = $pegawai->showpegawai(); ?>

		<div class="row">

    <?php 	
    	if(isset($_POST['search'])) {
        $search = $_POST['search'];
        $search = preg_replace("#[^0-9a-z]i#","", $search); 
        $cari = new Search();
        $kueri = $cari->searchpegawai($search);
        	include "templates/search/gaji.php";
        } else {

		while($result = mysqli_fetch_array($query)){ 
		?>
	        <div class="col-xs-18 col-sm-6 col-md-3">
	          <div class="thumbnail">
	            <img src="/img/karyawan/<?= $result['foto']?>">
	              <div class="caption">
	                <h4><?= $result['nama_pegawai']; ?></h4>
	                <p><b>Jabatan: </b><?php $jabatan = new Gaji(); echo $jabatan->jabatannya($result['id_jabatan']);?></p>
	                <a href="/pegawai/edit/<?= $result['id_pegawai']?>/" class="btn btn-default btn-xs pull-right" role="button"><i class="glyphicon glyphicon-edit"></i></a> 
	                <a href="/gaji/bayar/<?= $result['id_pegawai']?>/" class="btn btn-info btn-xs" role="button">Proccess Gaji</a>
	            </div>
	          </div>
	        </div>   
	    <?php } ?>  
	    </div>
	<?php } } ?>
<?php include "footer.php"; ?> 