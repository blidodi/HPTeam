<?php
	$id = $_GET['id'];
	$pegawai = new Pegawai();
	$jabatan = new Gaji();
	if(isset($_POST['simpan'])){
		$pegawais = $id;
		$jabatans = $_POST['jabatan'];
		$absen = $_POST['absen'];
		$bonus = explode(".", str_replace(",","",$_POST['bonus']));
		$bonus = $bonus[0];
		$gajis = (string)$_POST['total'];

		$gaji = new Gaji();
		$querys = $pegawai->editpegawai($id);
		$resultt = mysqli_fetch_array($querys);

		$statusbor = $resultt['status'];

		if($absen==""||$bonus==""){
			echo '<div class="alert alert-warning">
				  <strong>Peringatan!</strong> Harap isi semua field.
				</div>';
		} elseif ($statusbor==2||$statusbor==1){
			echo '<div class="alert alert-danger">
				  <strong>Peringatan!</strong> Karyawan ini sudah diproses.
				</div>';
		} else {
			$query = $gaji->savegaji($pegawais,$jabatans,$absen,$bonus,$gajis);
			$gaji->updatestatus($pegawais);
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
	$query = $pegawai->editpegawai($id);
	$result = mysqli_fetch_array($query); ?>
	<a href="/gaji/" class="btn btn-warning" style="display:block;float: right;"><i style="margin-right: 10px;" class="fa fa-undo" aria-hidden="true"></i>Kembali</a>
	<h4 style="border-bottom: 3px double #cecece;padding: 10px;color: #5a5a5a;padding-left: 0;margin-top:0;">Detail Karyawan</h4>
    
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
    <h4 style="border-bottom: 3px double #cecece;padding: 10px;color: #5a5a5a;padding-left: 0;">Detail Kehadiran dan Sallary</h4>
    <div class="row">
    	<?php
    		$form = new Form('','POST');
			echo $form->header('form-horizontal form-customize',''); 
			echo $form->formbootstrap_header('col-sm-2 control-label','Gaji Pokok','col-sm-10');
			echo '<p style="margin: 6px 0;">'.rp($jabatan->gajinya($result['id_jabatan'])).'</p>';
			echo $form->formbootstrap_footer();
			echo $form->formbootstrap_header('col-sm-2 control-label','Tidak hadir per hari','col-sm-10');
			echo '<input class="form-control absen" type="number" name="absen" placeholder="Absen..." onkeyup="kalkulasi()"/>';
			echo $form->formbootstrap_footer();
			echo $form->formbootstrap_header('col-sm-2 control-label','Bonus bulan ini','col-sm-10');
			echo '<input class="form-control bonus" type="text" name="bonus" placeholder="Bonus bulan ini..."  onkeyup="kalkulasi()"/>';
			echo $form->inputvalue('text','jabatan','hide',$result['id_jabatan']);
			echo $form->formbootstrap_footer();
			echo $form->formbootstrap_header('col-sm-2 control-label','Gaji','col-sm-10');
			echo $form->inputvalue('number','total','form-control hide','');
			echo '<p id="totalnya" style="margin: 6px 0;"></p>';
			echo $form->formbootstrap_footer();
			echo $form->submitbootstrap_header('col-sm-offset-2 col-sm-10');
			echo $form->button('submit','simpan','btn btn-success','Process');
			echo $form->formbootstrap_footer();
			echo $form->footer();
		?>
    </div>


	<script type="text/javascript">
		function kalkulasi() {
			var gaji = <?php echo $jabatan->gajinya($result['id_jabatan']); ?>;
			var absen = document.getElementsByName('absen')[0].value;
			var str = document.getElementsByName('bonus')[0].value;
			var bon = str.replace(new RegExp(',', 'g'),"");
			var bonus2 = bon.split(".");
			var bonus = bonus2[0];
			
			if(bonus == ""){
				bonusnya = 0;
			} else {
				bonusnya = parseInt(bonus);
			}
			var hasil = (gaji/30)*(30-absen)+bonusnya;
			
			document.getElementsByName('total')[0].value = Math.round(hasil);
			document.getElementById("totalnya").innerHTML= Math.round(hasil);

		}
	</script>
	<script type="text/javascript">$(".bonus").maskMoney();</script>