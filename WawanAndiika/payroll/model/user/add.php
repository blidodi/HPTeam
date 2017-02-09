<?php
			$user = new User();
				if(isset($_POST['simpan'])){
					$username = $_POST['username'];
					$password = $_POST['password'];
					$status = $_POST['status'];

					if($username==''||$password==''){
						echo '<div class="alert alert-warning">
								  <strong>Peringatan!</strong> Harap isi semua field.
								</div>';
					} else {
						$query = $user->adduser($username,$password,$status);
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
				echo $form->formbootstrap_header('col-sm-2 control-label','Username','col-sm-10');
				echo $form->inputsubmit('text','username','form-control','masukan username...');
				echo $form->formbootstrap_footer();
				echo $form->formbootstrap_header('col-sm-2 control-label','Password','col-sm-10');
				echo $form->inputsubmit('password','password','form-control','masukan password...');
				echo $form->formbootstrap_footer();
				echo $form->formbootstrap_header('col-sm-2 control-label','User Role','col-sm-10'); 
				echo $form->selectbootstrap('header','form-control','status');
				echo $form->optionbootstrap('0','','Accounting');
				echo $form->optionbootstrap('1','','Administrator');
				echo $form->selectbootstrap('footer','','');
				echo $form->formbootstrap_footer();
				echo $form->submitbootstrap_header('col-sm-offset-2 col-sm-10');
				echo $form->button('submit','simpan','btn btn-primary','Simpan');
				echo $form->formbootstrap_footer();
				echo $form->footer();