<?php	
	$pegawai = new Pegawai();
	$id = $_GET['id'];
	$querys = $pegawai->editpegawai($id);
	$resultt = mysqli_fetch_array($querys);

	if(isset($_POST['simpan'])){
		$nama = $_POST['namapegawai'];
		$no = $_POST['nopegawai'];
		$foto = $_FILES['fotopegawai']['name'];
		$extension=end(explode(".", $foto));
		$norekening = $_POST['norekening'];
		$alamat = $_POST['alamat'];
		$jabatan = $_POST['jabatan'];

		if(!($foto== "")){
        	unlink('img/karyawan/'.$resultt['foto']);
        	$random_digit = rand(0000,9999);
	        $validasi = preg_replace("/\s+/", "_","".$nama.".".$extension);
	        $new_file = $random_digit."_".$validasi;
	        $phono_path = $_FILES['fotopegawai']['tmp_name'];
	        $directory = "img/karyawan/".$new_file;
	        move_uploaded_file($phono_path,$directory);
			$pegawai->savepegawai($id,$jabatan,$nama,$new_file,$no,$norekening,$alamat);
		} else {
			$new_file = $resultt['foto'];
			$query = $pegawai->savepegawai($id,$jabatan,$nama,$new_file,$no,$norekening,$alamat);
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
	$query = $pegawai->editpegawai($id);
	$resultp = mysqli_fetch_array($query);
	$form = new Form('','POST'); 
	// Nama karyawan
	echo $form->header('form-horizontal form-customize','true'); 
	echo $form->formbootstrap_header('col-sm-2 control-label','Nama karyawan','col-sm-10');
	echo $form->inputvalue('text','namapegawai','form-control',$resultp['nama_pegawai']);
	echo $form->formbootstrap_footer();
	// Nomer Karyawan
	echo $form->formbootstrap_header('col-sm-2 control-label','Nomer karyawan','col-sm-10');
	echo $form->inputvalue('text','nopegawai','form-control',$resultp['no_pegawai']);
	echo $form->formbootstrap_footer();
	//Foto Karyawan
	echo $form->formbootstrap_header('col-sm-2 control-label','Foto karyawan','col-sm-10');
	if($resultp['foto']!==""){
		echo '<img src="/img/karyawan/'.$resultp['foto'].'" width="300px"/>';
	}
	echo $form->inputsubmit('file','fotopegawai','file-customize','');
	echo $form->formbootstrap_footer();
	//No rekening
	echo $form->formbootstrap_header('col-sm-2 control-label','Nomer rekening','col-sm-10');
	echo $form->inputvalue('number','norekening','form-control',$resultp['no_rekening']);
	echo $form->formbootstrap_footer();
	// jabatan
	echo $form->formbootstrap_header('col-sm-2 control-label','Jabatan karyawan','col-sm-10'); 
	echo $form->selectbootstrap('header','form-control','jabatan');
	$jabatan = new Jabatan();
	$query = $jabatan->showjabatan();
	while($result = mysqli_fetch_array($query)){ 
		if($result['id_jabatan']==$resultp['id_jabatan']){
			$pilih = 'selected';
		} else {
			$pilih ='';
		}
		echo $form->optionbootstrap($result['id_jabatan'],$pilih,$result['nama_jabatan']);
	}
	echo $form->selectbootstrap('footer','','');
	echo $form->formbootstrap_footer();
	//Alamat
	echo $form->formbootstrap_header('col-sm-2 control-label','Alamat karyawan','col-sm-10');
	echo $form->textarea('alamat','form-control',$resultp['alamat']);
	echo $form->formbootstrap_footer();
	//Simpan
	echo $form->submitbootstrap_header('col-sm-offset-2 col-sm-10');
	echo $form->button('submit','simpan','btn btn-primary','Simpan');
	echo $form->formbootstrap_footer();
	echo $form->footer(); 