<?php 
	include '../../model/sewa-model.php';
	$db = new Sewa();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<!-- CSS dan Icon -->
	<link rel="stylesheet" type="text/css" href="../../css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- Kalender -->
	<link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css" type="text/css"/>
	<script src="http://code.jquery.com/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js" type="text/javascript"></script>
		<script>
			$(function() {
				$( "#datepickersewa" ).datepicker({ dateFormat: 'yy-mm-dd' });
				$( "#datepickerkembali" ).datepicker({ dateFormat: 'yy-mm-dd' });
			});
		</script>

	<title>Tambah Penyewaan</title>
</head>
<body>
<div id="container">
    <div id="header">
		<h1>Sistem Penyewaan Buku</h1>
	</div>
	<ul>
		<li><a href="../../dashboard.php"><i class="fa fa-home"></i> Home</a></li>
		<li><a href="../user/user-view.php"><i class="fa fa-users"></i> Users</a></li>
		<li><a href="../member/member-view.php"><i class="fa fa-id-card"></i> Member</a></li>
		<li><a href="../buku/buku-view.php"><i class="fa fa-book"></i> Buku</a></li>
		<li><a class="active" href="#penyewaan-view"><i class="fa fa-shopping-cart"></i> Penyewaan</a></li>
		<li><a href="../pengembalian/kembali-view.php"><i class="fa fa-retweet"></i> Pengembalian</a></li>
		<li style="float:right"><a href="../../logout.php"><i class="fa fa-sign-out"></i> Logout</a></li>
	</ul>
	<div id="body">
		<div class="form">
		<p><a class="p-color" href="sewa-view.php">Tabel Penyewaan</a> / Tambah Penyewaan</p>		
		<form action="../../controller/sewa-controller.php?action=add" method="post">
			<?php 
				$tanggal = date("Y-m-d");
			?>
			<label>Tanggal Sewa:</label>
			<input type="text" name="tanggal" id="datepickersewa" value="<?php echo $tanggal ?>" />
			<label>Tanggal Kembali :</label>
			<input type="text" name="kembali" id="datepickerkembali" />
			<label>Member :</label>
			<select name="member">
			<option value="">-- Pilih --</option>
				<?php 
					foreach($db->tampil_member() as $member) {
						?>
							<option value="<?php echo $member['no_member']; ?>"><?php echo $member['nama'] ?>
							</option>
						<?php	
					}
				?>
			</select>
			<label>Buku :</label>
			<select name="buku">
			<option value="">-- Pilih --</option>
				<?php 
					foreach($db->tampil_buku() as $buku) {
						?>
							<option value="<?php echo $buku['isbn']; ?>"><?php echo $buku['judul'] ?>
							</option>
						<?php
						
					}
				?>
			</select>
			<label>Harga :</label>
			<input type="text" name="harga" />
			<input type="hidden" name="status" />
			<br/>
			<input type="submit" name="simpan" value="Simpan">

		</form>
		</div>
	</div>
	<div id="footer">
		<center>Copyright &copy; 2017 Designed by Rivalbamen</center>
	</div>
</div>
</body>
</html>