<?php
			$jabatan = new Jabatan();
				if(isset($_POST['simpan'])){
					$nama = $_POST['namajabatan'];
					$gaji = $_POST['gajijabatan'];

					if($nama==''||$gaji==''){
						echo '<div class="alert alert-warning">
								  <strong>Peringatan!</strong> Harap isi semua field.
								</div>';
					} else {
						$query = $jabatan->addjabatan($nama,$gaji);
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

				$form = new Form('','POST'); 
				echo $form->header('form-horizontal form-customize',''); 
				echo $form->formbootstrap_header('col-sm-2 control-label','Nama Jabatan','col-sm-10');
				echo $form->inputsubmit('text','namajabatan','form-control','masukan nama Jabatan...');
				echo $form->formbootstrap_footer();
				echo $form->formbootstrap_header('col-sm-2 control-label','Gaji Jabatan','col-sm-10');
				echo $form->inputsubmit('number','gajijabatan','form-control','masukan gaji Jabatan...');
				echo $form->formbootstrap_footer();
				echo $form->submitbootstrap_header('col-sm-offset-2 col-sm-10');
				echo $form->button('submit','simpan','btn btn-primary','Simpan');
				echo $form->formbootstrap_footer();
				echo $form->footer();