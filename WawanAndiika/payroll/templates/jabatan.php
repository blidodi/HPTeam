<?php 
	include "header.php"; 
	if(isset($_GET['act'])){
		switch ($_GET['act']) {
			case 'add':
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
				echo $form->header('form-horizontal form-customize'); 
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
				break;
			case 'edit':
				$jabatan = new Jabatan();
				$id = $_GET['id'];

				if(isset($_POST['simpan'])){
					$nama = $_POST['namajabatan'];
					$gaji = $_POST['gajijabatan'];

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
				echo $form->header('form-horizontal form-customize'); 
				echo $form->formbootstrap_header('col-sm-2 control-label','Nama Jabatan','col-sm-10');
				echo $form->inputvalue('text','namajabatan','form-control',$result['nama_jabatan']);
				echo $form->formbootstrap_footer();
				echo $form->formbootstrap_header('col-sm-2 control-label','Gaji Jabatan','col-sm-10');
				echo $form->inputvalue('number','gajijabatan','form-control',$result['gaji']);
				echo $form->formbootstrap_footer();
				echo $form->submitbootstrap_header('col-sm-offset-2 col-sm-10');
				echo $form->button('submit','simpan','btn btn-primary','Simpan');
				echo $form->formbootstrap_footer();
				echo $form->footer();

				break;
			case 'remove':
				$jabatan = new Jabatan();
				$id = $_GET['id'];
				$query = $jabatan->removejabatan($id);
				header("location:/page/jabatan/");
				break;
			default:
				include "templates/404.php";
		}
	} if(!isset($_GET['act'])){?> 
	<div class="table-responsive">
        <table class="table table-striped">
          <thead>
            <tr>
              <th>Nama</th>
              <th>Gaji</th>
              <th width="200px;">Action</th>
          </thead>
          <tbody>
            	<?php
            		$jabatan = new Jabatan();
            		$query = $jabatan->showjabatan();
            		while($result = mysqli_fetch_array($query)){ ?>
			  			<tr>
			              <td><?= $result['nama_jabatan']; ?></td>
			              <td><?= rp($result['gaji']); ?></td>
			              <td>
			              	<a class="btn btn-success" href="edit/<?= $result['id_jabatan'];?>/">Edit</a>
			              	<a class="btn btn-danger" href="remove/<?= $result['id_jabatan'];?>/" onclick="return confirm('Yakin mau dihapus?')">Hapus</a>
			              </td>
			            </tr>
			  	<?php }	?>
           </tbody>
        </table>
	</div>
	<?php } ?>
<?php include "footer.php"; ?> 



	