<?php
	$id = $_GET['id'];
	$jabatan = new Gaji();
	if(isset($_POST['simpan'])){
		$final = $_POST['finalgaji'];
		$pph = $_POST['pph'];

		$query = $jabatan->printgaji($id);
		$result = mysqli_fetch_array($query);

		$pegawainya = $result['id_pegawai'];
		if($final==""||$pph==""){
			echo '<div class="alert alert-warning">
				  <strong>Peringatan!</strong> Harap isi semua field.
				</div>';
		} else {
			$query = $jabatan->savefinal($pph,$final,$id,$pegawainya);

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
	}
	$query = $jabatan->printgaji($id);
	$result = mysqli_fetch_array($query);
	$pph = (5/100*$result['total_gaji'])/12;
	//$bonus = $result['total_gaji'] - ($jabatan->gajinya($result['id_jabatan'])/30)*(30-$result['absen']);
?>
<h4 style="border-bottom: 3px double #cecece;padding: 10px;color: #5a5a5a;padding-left: 0;margin-top:0;">Detail Gaji</h4>
    <div class="row">
        <div class="col-sm-12 col-md-6 col-lg-3">
            <img src="/img/karyawan/<?= $result['foto'];?>" width="100%" height="150px" alt="<?= $result['nama_pegawai'];?>"/>
        </div>

        <div class="col-sm-12 col-md-6 col-lg-9">
            <div class="caption">
	        	<ul>
	        		<li><b>Nama: </b><?= $result['nama_pegawai'];?></li>
	        		<li><b>Nomer Karyawan: </b><?= $result['no_pegawai'];?></li>
	        		<li><b>Nomer Rekening: </b><?= $result['no_rekening'];?></li>
	        		<li><b>Jabatan: </b><?php echo $jabatan->jabatannya($result['id_jabatan']);?></li>
	        		<li><b>Alamat: </b><?= $result['alamat'];?></li>
	        	</ul>             
            </div>            
        </div>
    </div>
    <div class="row">
    	<?php
    		$form = new Form('','POST');
			echo $form->header('form-horizontal form-customize',''); 
			echo $form->formbootstrap_header('col-sm-2 control-label','Gaji Jabatan','col-sm-10');
			echo '<p style="margin: 6px 0;">'.rp($jabatan->gajinya($result['id_jabatan'])).'</p>';
			echo $form->formbootstrap_footer();
			echo $form->formbootstrap_header('col-sm-2 control-label','Bonus','col-sm-10');
			echo '<p id="bonus" style="margin: 6px 0;">'.rp($result['bonus']).'</p>';
			echo $form->formbootstrap_footer();
			echo $form->formbootstrap_header('col-sm-2 control-label','Tidak hadir','col-sm-10');
			echo '<p style="margin: 6px 0;">'.$result['absen'].' hari</p>';
			echo $form->formbootstrap_footer();
			echo $form->formbootstrap_header('col-sm-2 control-label','Gaji','col-sm-10');
			echo '<p style="margin: 6px 0;">'.rp($result['total_gaji']).'</p>';
			echo $form->formbootstrap_footer();
			echo $form->formbootstrap_header('col-sm-2 control-label','Tanggal Diproses','col-sm-10');
			echo '<p style="margin: 6px 0;">'.indo($result['tanggal_diproses']).'</p>';
			echo $form->formbootstrap_footer();
			echo $form->formbootstrap_header('col-sm-2 control-label','pph','col-sm-10');
			echo $form->inputvalue('number','pph','form-control hide',$pph);
			echo '<p id="pph" style="margin: 6px 0;">'.rp($pph).'</p>';
			echo $form->formbootstrap_footer();
			echo $form->formbootstrap_header('col-sm-2 control-label','Take home pay','col-sm-10');
			echo $form->inputvalue('number','finalgaji','form-control hide',$result['total_gaji']-$pph);
			echo '<p id="final" style="margin: 6px 0;">'.rp($result['total_gaji']-$pph).'</p>';
			echo $form->formbootstrap_footer();
			echo $form->submitbootstrap_header('col-sm-offset-2 col-sm-10');
			echo $form->button('submit','simpan','btn btn-success','Process');
			echo $form->formbootstrap_footer();
			echo $form->footer();
		?>
    </div>