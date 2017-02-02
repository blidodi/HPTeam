<?php include "header.php"; ?>
		<div id="content-wrapper">
			<div class="content-header">
	          	<h1>
	            	Data Buku
	          	</h1>
	          	<ol class="breadcrumb">
	            	<li><a href="index.php">Home</a></li>>
	            	<li>Data Buku</li>
	          	</ol>
	        </div>
	        <div class="content">
	        	<table border="1">
	        		<thead>
						<tr>
							<th>Judul Buku</th>
							<th>Penulis</th>
							<th>Penerbit</th>
							<th>Tahun</th>
							<th>ISBN</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php
						include "config/koneksi.php";
						$query = mysqli_query($koneksi, "SELECT * FROM tbl_buku");
						while ($result = mysqli_fetch_array($query)) { ?>
						 	<tr>
								<td><?= $result['judul'];?></td>
								<td><?= $result['penulis'];?></td>
								<td><?= $result['penerbit'];?></td>
								<td><?= $result['tahun'];?></td>
								<td><?= $result['isbn'];?></td>
								<td><a class="edit-tabel" style="width: 10px; height:10px;margin-right:3px;"" href="?edit=<?= $result['id'];?>">Edit</a>
								<a  class="hapus-tabel" style="width: 10px; height:10px;margin-right:3px;" href="delete.php?remove=<?= $result['id'];?>" onclick="return confirm('Are you sure?')">Hapus</a></td>
							</tr>
						<?php }	?>
					</tbody>
				</table>
			 </div>
			 <?php if(isset($_GET['edit'])){ ?>
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
			 <?php } ?>
		</div>
<?php include "footer.php"; ?>