<?php
	include "header.php"; 
	$dashboard = new Dashboard();
	$reset = new Gaji();
	if(isset($_POST['reset'])){
		$query = $reset->resetstatus();
		if(!$query){
			echo '<div class="alert alert-success">
				  <strong>Success!</strong> Data berhasil di simpan.
				</div>';
		} else {
			echo '<div class="alert alert-danger">
				  <strong>Gagal!</strong> Data gagal di simpan.
				</div>';
		}
	}
	if($_SESSION['role']==1){
		$form = new Form('','POST'); 
		echo $form->header('',''); 
		echo $form->submitbootstrap_header('');
		echo $form->button('submit','reset','btn btn-danger','Reset Status');
		echo $form->formbootstrap_footer();
		echo $form->footer(); 
	}?>
	<style type="text/css">
		/* INDEX
		===================================================================== */
		.data-rapi {
			max-width: 1057px;
		}
		.data-isinya {
			padding: 10px;
		    width: 100%;
		    height: 100px;
		    background: #BF3131;
		    border-radius: 5px;
		    margin-top: 10px;
		}
		.data-isinya .tulisan {
			font-size: 15px;
		    color: #ddd;
		    text-align: center;
		}
		.data-isinya img {
			height: 73px;
			float: left;
		}
		.data-isinya .nomer-isi {
			    text-align: center;
		    color: #ddd;
		    font-size: 35px;
		}
	</style>
	<div class="row">
		<div class="col-md-3">
			<div class="data-isinya" style="background: #337ab7;">
				<div class="num-row">
					<img src="/assets/img/gaji.png">
					<div class="nomer-isi">
						<?php 
							$query = $dashboard->showgaji();
							echo $row = mysqli_num_rows($query);?>
					</div>
					<div class="tulisan">Gaji Belum Lunas</div>
				</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="data-isinya" style="background: #c3ad04;">
				<div class="num-row">
					<img src="/assets/img/user.png">
					<div class="nomer-isi">
						<?php 
							$query = $dashboard->showuser();
							echo $row = mysqli_num_rows($query);?>
					</div>
					<div class="tulisan">Total User</div>
				</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="data-isinya">
				<div class="num-row">
					<img src="/assets/img/sopir.png">
					<div class="nomer-isi">
						<?php 
							$query = $dashboard->showpegawai();
							echo $row = mysqli_num_rows($query);?>
					</div>
					<div class="tulisan">Banyak Karyawan</div>
				</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="data-isinya" style="background: #0a9c46;">
				<div class="num-row">
					<img src="/assets/img/jabatan.png">
					<div class="nomer-isi">
						<?php 
							$query = $dashboard->showjabatan();
							echo $row = mysqli_num_rows($query);?>
					</div>
					<div class="tulisan">Total Jabatan</div>
				</div>
			</div>
		</div>
	</div>
	<h2 class="sub-header" style="margin: 20px 0;">Karyawan Terbaru</h2>
		<div class="row">
			<?php
			$query = $dashboard->pegawaidashboard();
			while($result = mysqli_fetch_array($query)){ 
			?>
		        <div class="col-xs-18 col-sm-6 col-md-3">
		          <div class="thumbnail">
		            <img src="/img/karyawan/<?= $result['foto']?>">
		              <div class="caption">
		                <h4><?= $result['nama_pegawai']; ?></h4>
		                <p><b>Jabatan: </b><?php $jabatan = new Gaji(); echo $jabatan->jabatannya($result['id_jabatan']);?></p>
		                <a href="/pegawai/edit/<?= $result['id_pegawai']?>/" class="btn btn-default btn-xs pull-right" role="button"><i class="glyphicon glyphicon-edit"></i></a> 
		                <a href="/pegawai/edit/<?= $result['id_pegawai']?>/" class="btn btn-info btn-xs" role="button">Edit Karyawan</a>
		            </div>
		          </div>
		        </div>   
		    <?php } ?>  
	    </div>
<?php	include "footer.php"; ?> 