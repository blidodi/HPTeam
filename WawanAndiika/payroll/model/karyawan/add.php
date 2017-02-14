<?php	
	if(isset($_POST['simpan'])){
		$nama = $_POST['namapegawai'];
		$no = $_POST['nopegawai'];
		$foto = $_FILES['fotopegawai']['name'];
		$extension=end(explode(".", $foto));
		$norekening = $_POST['norekening'];
		$alamat = $_POST['alamat'];
		$jabatan = $_POST['jabatan'];

		if($nama==""||$no==""||$foto==""||$norekening==""||$alamat==""){
			echo '<div class="alert alert-warning">
					  <strong>Peringatan!</strong> Harap isi semua field.
					</div>';
		} else {
			$random_digit = rand(0000,9999);
	        $validasi = preg_replace("/\s+/", "_","".$nama.".".$extension);
	        $new_file = $random_digit."_".$validasi;
	        $phono_path = $_FILES['fotopegawai']['tmp_name'];
	        $directory = "img/karyawan/".$new_file;
	        move_uploaded_file($phono_path,$directory);

			$pegawai = new Pegawai();
			$query = $pegawai->addpegawai($jabatan,$nama,$new_file,$no,$norekening,$alamat);
			if($query){
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
	// Nama karyawan
	echo $form->header('form-horizontal form-customize','true'); 
	echo $form->formbootstrap_header('col-sm-2 control-label','Nama karyawan','col-sm-10');
	echo $form->inputsubmit('text','namapegawai','form-control','masukan nama karyawan...');
	echo $form->formbootstrap_footer();
	// Nomer Karyawan
	echo $form->formbootstrap_header('col-sm-2 control-label','Nomer karyawan','col-sm-10');
	echo $form->inputsubmit('text','nopegawai','form-control','masukan nomer karyawan...');
	echo $form->formbootstrap_footer();
	//Foto Karyawan
	echo $form->formbootstrap_header('col-sm-2 control-label','Foto karyawan','col-sm-10');
	echo $form->inputsubmit('file','fotopegawai','file-customize','');
	echo $form->formbootstrap_footer();
	//No rekening
	echo $form->formbootstrap_header('col-sm-2 control-label','Nomer rekening','col-sm-10');
	echo $form->inputsubmit('number','norekening','form-control','masukan nomer rekening karyawan...');
	echo $form->formbootstrap_footer();
	// jabatan
	echo $form->formbootstrap_header('col-sm-2 control-label','Jabatan karyawan','col-sm-10'); 
	echo $form->selectbootstrap('header','form-control','jabatan');
	$jabatan = new Jabatan();
	$query = $jabatan->showjabatan();
	while($result = mysqli_fetch_array($query)){ 
		echo $form->optionbootstrap($result['id_jabatan'],'',$result['nama_jabatan']);
	}
	echo $form->selectbootstrap('footer','','');
	echo $form->formbootstrap_footer();
	//Alamat
	echo $form->formbootstrap_header('col-sm-2 control-label','Alamat karyawan','col-sm-10');
	echo $form->textarea('alamat','form-control','');
	echo $form->formbootstrap_footer();
	//Simpan
	echo $form->submitbootstrap_header('col-sm-offset-2 col-sm-10');
	echo $form->button('submit','simpan','btn btn-primary','Simpan');
	echo $form->formbootstrap_footer();
	echo $form->footer(); 