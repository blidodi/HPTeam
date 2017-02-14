          <?php while($searchnya = mysqli_fetch_array($kueri)){ ?>
			<div class="col-xs-18 col-sm-6 col-md-3">
	          <div class="thumbnail">
	            <img src="/img/karyawan/<?= $searchnya['foto']?>">
	              <div class="caption">
	                <h4><?= $searchnya['nama_pegawai']; ?></h4>
	                <p><b>Jabatan: </b><?php $jabatan = new Gaji(); echo $jabatan->jabatannya($searchnya['id_jabatan']);?></p>
	                <a href="/pegawai/edit/<?= $searchnya['id_pegawai']?>/" class="btn btn-default btn-xs pull-right" role="button"><i class="glyphicon glyphicon-edit"></i></a> 
	                <a href="/gaji/bayar/<?= $searchnya['id_pegawai']?>/" class="btn btn-info btn-xs" role="button">Proccess Gaji</a>
	            </div>
	          </div>
	        </div>   
          <?php } ?>
           