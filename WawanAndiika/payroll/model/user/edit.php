<?php
			$user = new User();
			$id = $_GET['id'];
				if(isset($_POST['simpan'])){
					$username = $_POST['username'];
					$password = $_POST['password'];
					$status = $_POST['status'];

					if($username==''||$password==''){
						echo '<div class="alert alert-warning">
								  <strong>Peringatan!</strong> Harap isi semua field.
								</div>';
					} else {
						$query = $user->saveuser($id,$username,$password,$status);
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
				$query = $user->edituser($id);
				$result = mysqli_fetch_array($query);
				$form = new Form('','POST'); 
				echo $form->header('form-horizontal form-customize',''); 
				echo $form->formbootstrap_header('col-sm-2 control-label','Nama Jabatan','col-sm-10');
				echo $form->inputvalue('text','username','form-control',$result['username']);
				echo $form->formbootstrap_footer();
				echo $form->formbootstrap_header('col-sm-2 control-label','Gaji Jabatan','col-sm-10');
				echo $form->inputvalue('password','password','form-control',$result['password']);
				echo $form->formbootstrap_footer();
				echo $form->formbootstrap_header('col-sm-2 control-label','Jabatan karyawan','col-sm-10'); 
				echo $form->selectbootstrap('header','form-control','status');
				$pilih==''; $pilih2=='';
				if($result['role']==1){
					$pilih = 'selected';
				} 
				if($result['role']==0){
					$pilih2 = 'selected';
				}
				echo $form->optionbootstrap('0',$pilih,'Accounting');
				echo $form->optionbootstrap('1',$pilih,'Administrator');
				echo $form->selectbootstrap('footer','','');
				echo $form->formbootstrap_footer();
				echo $form->submitbootstrap_header('col-sm-offset-2 col-sm-10');
				echo $form->button('submit','simpan','btn btn-primary','Simpan');
				echo $form->formbootstrap_footer();
				echo $form->footer();