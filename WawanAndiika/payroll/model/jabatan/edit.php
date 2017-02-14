<?php
				$jabatan = new Jabatan();
				$id = $_GET['id'];

				if(isset($_POST['simpan'])){
					$nama = $_POST['namajabatan'];
					$gaji = explode(".", str_replace(",","",$_POST['gajijabatan']));
					$gaji = $gaji[0];

					if($nama==''||$gaji==''){
						echo '<div class="alert alert-warning">
								  <strong>Peringatan!</strong> Harap isi semua field.
								</div>';
					} else {
						$query = $jabatan->savejabatan($nama,$gaji,$id);
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

				$query = $jabatan->editjabatan($id);
				$result = mysqli_fetch_array($query);
				$form = new Form('','POST'); 
				echo $form->header('form-horizontal form-customize',''); 
				echo $form->formbootstrap_header('col-sm-2 control-label','Nama Jabatan','col-sm-10');
				echo $form->inputvalue('text','namajabatan','form-control',$result['nama_jabatan']);
				echo $form->formbootstrap_footer();
				echo $form->formbootstrap_header('col-sm-2 control-label','Gaji Jabatan','col-sm-10');
				echo $form->inputvalue('text','gajijabatan','form-control gaji',$result['gaji']);
				echo $form->formbootstrap_footer();
				echo $form->submitbootstrap_header('col-sm-offset-2 col-sm-10');
				echo $form->button('submit','simpan','btn btn-primary','Simpan');
				echo $form->formbootstrap_footer();
				echo $form->footer(); ?>
				<script type="text/javascript">$(".gaji").maskMoney();</script>