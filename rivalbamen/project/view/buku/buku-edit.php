<?php 
	include '../../model/buku-model.php';
	$db = new Buku();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="../../css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>Ubah Buku</title>
</head>
<body>
	<div id="container">
	    <div id="header">
			<h1>Tabel Buku</h1>
		</div>
		<ul>
			<li><a href="../../dashboard.php"><i class="fa fa-home"></i> Home</a></li>
			<li><a href="../user/user-view.php"><i class="fa fa-users"></i> Users</a></li>
			<li><a href="../member/member-view.php"><i class="fa fa-id-card"></i> Member</a></li>
			<li><a class="active" href="#buku-view"><i class="fa fa-book"></i> Buku</a></li>
			<li><a href="../penyewaan/sewa-view.php"><i class="fa fa-shopping-cart"></i> Penyewaan</a></li>
			<li><a href="../pengembalian/kembali-view.php"><i class="fa fa-retweet"></i> Pengembalian</a></li>
			<li style="float:right"><a href="../../logout.php"><i class="fa fa-sign-out"></i> Logout</a></li>
		</ul>
		<div id="body">
		<div class="form">
		<p><a class="p-color" href="buku-view.php">Tabel Member</a> / Ubah Member</p>
		<form action="../../controller/buku-controller.php?action=edit" method="post"action>
		<?php
			foreach($db->tampil_edit_buku($_GET['id']) as $edit){
		?>
		<input type="hidden" name="id" value="<?php echo $edit['id'] ?>" />
		<label>ISBN :</label>
		<input type="text" name="isbn" value="<?php echo $edit['isbn'] ?>" />
		<label>Judul :</label>
		<input type="text" name="judul" value="<?php echo $edit['judul'] ?>" />
		<label>Pengarang :</label>
		<input type="text" name="pengarang" value="<?php echo $edit['pengarang'] ?>" />
		<label>Penerbit :</label>
		<input type="text" name="penerbit" value="<?php echo $edit['penerbit'] ?>" />
		<label>Kategori :</label>
		<!--<input type="text" name="kategori" value="<?php //echo $edit['kategori'] ?>" />-->
		<select name="kategori">
		<option value="">-- Pilih --</option>
				<?php 

					foreach($db->tampil_kategori() as $kategori) {
						if($kategori['kode'] == $edit['kategori']) {
						?>
							<option value="<?php echo $kategori['kode']; ?>" selected><?php echo $kategori['kategori']?>
							</option>
						<?php
						} else {
						?>
							<option value="<?php echo $kategori['kode']; ?>"><?php echo $kategori['kategori'] ?>
							</option>
						<?php
						}
					}
				?>
		</select>
		<label>Tahun :</label>
		<input type="text" name="tahun" value="<?php echo $edit['tahun'] ?>" />
		<br/>
		<input type="submit" name="ubah" value="Ubah">
		<?php } ?>
	</form>
		</div>
		</div>
	<div id="footer">
		<center>Copyright &copy; 2017 Designed by Rivalbamen</center>
	</div>
</div>
</body>
</html>