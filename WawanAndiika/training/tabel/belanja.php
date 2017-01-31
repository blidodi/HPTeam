<?php include "header.php"; 
	if(isset($_GET['remove'])){
               
    }
	if(isset($_POST['simpan'])){
		       
	}
    if(isset($_GET['id_cat'])){
   		
    }	
?>
		<div id="content-wrapper">
			<div class="content-header">
	          	<h1>
	            	Data Belanja
	          	</h1>
	          	<ol class="breadcrumb">
	            	<li><a href="index.php">Home</a></li>>
	            	<li>Data Belanja</li>
	          	</ol>
	        </div>
	        <div class="content">
	        	<?php if(isset($_GET['act'])){
	        		if($_GET['act']=='add'){?>
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
	        	<?php }} ?>
        	</div>
		</div>
<?php include "footer.php"; ?>