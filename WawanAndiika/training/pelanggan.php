<?php include "header.php"; 
			if(isset($_GET['remove'])){
                $query = mysqli_query($koneksi, "DELETE FROM tbl_pelanggan WHERE idPelanggan='".$_GET['remove']."'");
                if($query){
                    $notif['class'] = "success";
                    $notif['msg_head'] = "Success!";
                    $notif['msg'] = "Data berhasil dihapus ..";
                } else {
                    $notif['class'] = "error-login";
                    $notif['msg_head'] = "Peringatan: Error!";
                    $notif['msg'] = "Data gagal dihapus ..";
                }
            }
			if(isset($_POST['simpan'])){
		        $noktp = $_POST['noktp'];
		        $nama = $_POST['namapelanggan'];
		        $alamat = $_POST['alamatpelanggan'];
		        $telp = $_POST['telppelanggan'];
		        $cekktp = mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM tbl_pelanggan WHERE NoKTP='$noktp'"));
				

		        if($nama=="" || $alamat=="" || $telp=="" || $noktp==""){
		        	$notif['class'] = "error-login";
                	$notif['msg_head'] = "Peringatan: Error!";
                	$notif['msg'] = "Tolong lengkapi data terlebih dahulu ..";
            	} else {
            		if(isset($_GET['idPelanggan'])) {
		        		$idPelanggan = $_GET['idPelanggan'];
		        		$query = mysqli_query($koneksi, "UPDATE tbl_pelanggan SET NoKTP='$noktp', NamaPelanggan='$nama', AlamatPelanggan='$alamat', TelpPelanggan='$telp' WHERE idPelanggan=$idPelanggan");
		        		
	            		if($query){
			                	$notif['class'] = "success";
			                    $notif['msg_head'] = "Success!";
			                    $notif['msg'] = "Data yang anda masukan berhasil disimpan ..";
			            }

            		} else {
            			if ($cekktp>0) { 
		            		$notif['class'] = "error-login";
		                	$notif['msg_head'] = "Peringatan: Error!";
		                	$notif['msg'] = "No KTP telah tersedia ..";
                		} else {
            				$query = mysqli_query($koneksi, "INSERT INTO tbl_pelanggan SET NoKTP='$noktp', NamaPelanggan='$nama', AlamatPelanggan='$alamat', TelpPelanggan='$telp'") or die(mysqli_error());
		            		if($query){
				                	$notif['class'] = "success";
				                    $notif['msg_head'] = "Success!";
				                    $notif['msg'] = "Data yang anda masukan berhasil disimpan ..";
				            }
            			}
            		}
	            }
		    }
		    if(isset($_GET['idPelanggan'])){
           		$id = $_GET['idPelanggan'];
	            $query = mysqli_query($koneksi, "SELECT * FROM tbl_pelanggan WHERE idPelanggan = '$id'");
				$data = mysqli_fetch_array($query);
	            $noktp = $data['NoKTP'];
		        $nama = $data['NamaPelanggan'];
		        $alamat = $data['AlamatPelanggan'];
		        $telp = $data['TelpPelanggan'];
	        }	
?>
		<div id="content-wrapper">
			<div class="content-header">
	          	<h1>
	            	Data Pelanggan
	          	</h1>
	          	<ol class="breadcrumb">
	            	<li><a href="index.php">Home</a></li>>
	            	<li>Data Pelanggan</li>
	          	</ol>
	        </div>
	        <div class="content">
	        	<?php if (empty($_GET['act']) && !isset($_GET['act']) || isset($_GET['remove'])){ ?>
	        	<div class="page-header-breadcrumb">
                    <div class="bread-crumb">
                        <img src="img/icon/home-black.png"/ style="width: 15px;height: 15px;margin-bottom: -2px; margin-right:5px;"/><a href="index.php">Dashboard </a> / <a href="pelanggan.php">Data Pelanggan</a>
                    </div>
                    <div class="tanggal">
                        <?php echo (DateToIndo(date('Y/m/d'))); ?>
                    </div>
                </div>
                <div class="page-header">
                    <div class="page-title">
                        <h3>Data Pelanggan</h3><div class="clear"></div>
                        <span>Hallo, <?php echo $_SESSION['Nama']; ?></span>
                    </div>
                </div>
	        	<div class="box-content-header">
        			<a href="transaksi.php" class="tambah-data" style="float:right;">Buat Transaksi Baru</a>
        			<div class="clear"></div>
        		</div>
        		<div class="box-content-transaksi">
        			<form action="pelanggan.php" method="post" class="search-form">  
						<input class="search-text" type="text" placeholder="Search berdasarkan nama pelanggan" name="search"/>
						<input type="submit" class="search-submit" value="Search"/><br style="clear:both;"/>
					</form>  
	        		<?php
                    if(isset($notif)){
                        ?>
                        <div class="<?php echo $notif['class']; ?>" style="margin: 10px auto 20px;border-radius:3px;"> 
                            <div style="font-size:20px;margin-bottom:3px;color:#fff;"><?php echo $notif['msg_head']; ?><br/></div>
                            <div style="font-size:13px;margin-bottom:5px;"><?php echo $notif['msg']; ?></div>
                        </div>
                	<?php } ?>

                	<?php
					if(isset($_POST['search'])) {
						$search = $_POST['search'];
						$search = preg_replace("#[^0-9a-z]i#","", $search); ?>
		        	<?php include "search/pelanggan.php" ?>
					<?php } else { ?>
	        		<table>
						<thead>
							<tr>
								<th>No</th>
								<th>No KTP</th>
								<th>Nama Pelanggan</th>
								<th>Alamat Pelanggan</th>
								<th>Telp Pelanggan</th>
								<th>Aksi</th>
							</tr>
						</thead>
						<tbody>
						<?php
							include "function/page.php";
	                      	$query = mysqli_query($koneksi, "SELECT * FROM tbl_pelanggan limit $posisi,$batas") or die (mysqli_error());
	                      	$no = 1+$posisi;
	                         	if(mysqli_num_rows($query) == 0) { ?>
	                       			<tr>
										<td colspan="7"> <b>Tidak ada data yang tersedia</b></td>
									</tr>
	                       		<?php } else {
	                        		while($r = mysqli_fetch_array($query)):   
	                    ?>
							<tr>
								<td><?php echo $no; ?>.</td>
								<td><?php echo $r['NoKTP'] ?></td>
								<td><?php echo $r['NamaPelanggan'] ?></td>
								<td><?php echo $r['AlamatPelanggan'] ?></td>
								<td><?php echo $r['TelpPelanggan'] ?></td>
								<td><a class="edit-tabel" href="pelanggan.php?act=edit&idPelanggan=<?php echo $r['idPelanggan'] ?>"><img src="img/icon/editing.png" style="width: 10px; height:10px;margin-right:3px;"/>Edit</a> <a class="hapus-tabel" href="pelanggan.php?remove=<?php echo $r['idPelanggan
								'] ?>" onClick='return confirm("Apakah anda yakin data di hapus?")'><img src="img/icon/hapus.png" style="width: 10px; height:10px;margin-right:3px;"/>Hapus</a></td>
							</tr>
						<?php  $no++; endwhile;  } ?>
						<tr>
						<td colspan="6" class="pagging-number">
						<?php
							//hitung jumlah data
							$jml_data = mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM tbl_pelanggan"));
							include "function/pagging.php";
						?>
						</td>
						</tr>
						</tbody>
					</table>

					<?php } ?>
	        	</div>
        		<div class="box-content-footer">
        			<a class="tambah-data" href="pelanggan.php?act=add">Tambah Data Pelanggan</a>
        		</div>
        		<?php } elseif (isset($_GET['idPelanggan'])&& $_GET['act']='edit') { ?>
        		<div class="page-header-breadcrumb">
                    <div class="bread-crumb">
                        <img src="img/icon/home-black.png"/ style="width: 15px;height: 15px;margin-bottom: -2px; margin-right:5px;"/><a href="index.php">Dashboard </a> / <a href="pelanggan.php">Data Pelanggan</a> / <a href="">Edit Data Pelanggan</a>
                    </div>
                    <div class="tanggal">
                        <?php echo (DateToIndo(date('Y/m/d'))); ?>
                    </div>
                </div>
                <div class="page-header">
                    <div class="page-title">
                        <h3>Edit Data Pelanggan</h3><div class="clear"></div>
                        <span>Hallo, <?php echo $_SESSION['Nama']; ?></span>
                    </div>
                </div>
        		<div class="box-content-header">
        			<a href="pelanggan.php" class="tambah-data">Kembali</a>
        			<a href="transaksi.php" class="tambah-data" style="float:right;">Buat Transaksi Baru</a>
        			<div class="clear"></div>
        		</div>
        		<div class="box-content">
				<?php if(isset($notif)){
                        ?>
                        <div class="<?php echo $notif['class']; ?>" style="margin: 0 auto 20px;border-radius:5px;"> 
                            <div style="font-size:20px;margin-bottom:3px;color:#fff;"><?php echo $notif['msg_head']; ?><br/></div>
                            <div style="font-size:13px;margin-bottom:5px;"><?php echo $notif['msg']; ?></div>
                        </div>
                	<?php } ?>
	        		<form action="" method="POST">
		        		<label class="selat-2">No KTP</label>
		        		<fieldset><input name="noktp" value="<?php echo $noktp;?>" placeholder="Nomer KTP Pelanggan" type="number"></fieldset>
		        		
		        		<label class="selat-2">Nama Pelanggan</label>
		        		<fieldset><input name="namapelanggan" value="<?php echo $nama;?>" placeholder="Nama Pelanggan" type="text"></fieldset>
		        		
		        		<label class="selat-2">Alamat Pelanggan</label>
		        		<fieldset><input name="alamatpelanggan" value="<?php echo $alamat;?>" placeholder="Alamat Pelanggan" type="text"></fieldset>

		        		<label class="selat-2">No Telepon Pelanggan</label>
		        		<fieldset><input name="telppelanggan" value="<?php echo $telp;?>" placeholder="Nomer Telepon Pelanggan" type="number"></fieldset>
		        		
		        		<label class="selat-2"></label>
		        		<fieldset><button name="simpan" type="submit">Simpan</button></fieldset>
	        		</form>
	        	</div>
        		<?php } else if($_GET['act']='add'){

        			?>
        		<div class="page-header-breadcrumb">
                    <div class="bread-crumb">
                        <img src="img/icon/home-black.png"/ style="width: 15px;height: 15px;margin-bottom: -2px; margin-right:5px;"/><a href="index.php">Dashboard </a> / <a href="pelanggan.php">Data Pelanggan</a> / <a href="">Tambah Data Pelanggan</a>
                    </div>
                    <div class="tanggal">
                        <?php echo (DateToIndo(date('Y/m/d'))); ?>
                    </div>
                </div>
                <div class="page-header">
                    <div class="page-title">
                        <h3>Tambah Data Pelanggan</h3><div class="clear"></div>
                        <span>Hallo, <?php echo $_SESSION['Nama']; ?></span>
                    </div>
                </div>
        		<div class="box-content-header">
        			<a href="pelanggan.php" class="tambah-data">Kembali</a>
        			<a href="transaksi.php" class="tambah-data" style="float:right;">Buat Transaksi Baru</a>
        			<div class="clear"></div>
        		</div>
        		<div class="box-content">
					<?php
                    if(isset($notif)){
                        ?>
                        <div class="<?php echo $notif['class']; ?>" style="margin: 0 auto 20px;border-radius:5px;"> 
                            <div style="font-size:20px;margin-bottom:3px;color:#fff;"><?php echo $notif['msg_head']; ?><br/></div>
                            <div style="font-size:13px;margin-bottom:5px;"><?php echo $notif['msg']; ?></div>
                        </div>
                	<?php } ?>
	        		<form action="" method="POST">
		        		<label class="selat-2">No KTP</label>
		        		<fieldset><input name="noktp" placeholder="Nomer KTP Pelanggan" type="number"></fieldset>
		        		
		        		<label class="selat-2">Nama Pelanggan</label>
		        		<fieldset><input name="namapelanggan"  placeholder="Nama Pelanggan" type="text"></fieldset>
		        		
		        		<label class="selat-2">Alamat Pelanggan</label>
		        		<fieldset><input name="alamatpelanggan" placeholder="Alamat Pelanggan" type="text"></fieldset>

		        		<label class="selat-2">No Telepon Pelanggan</label>
		        		<fieldset><input name="telppelanggan" placeholder="Nomer Telepon Pelanggan" type="number"></fieldset>
		        		
		        		<label class="selat-2"></label>
		        		<fieldset><button name="simpan" type="submit">Simpan</button></fieldset>
	        		</form>
	        	</div>
	        	<?php } ?>

        	</div>
		</div>
<?php include "footer.php"; ?>