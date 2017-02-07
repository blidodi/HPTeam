<?php 
	include '../../model/sewa-model.php';
	$db = new Sewa();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="../../css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script>
		function confirmDelete(delUrl) {
		  if (confirm("Apakah Yakin dihapus?")) {
		    document.location = delUrl;
		  }
		}
	</script>
	<title>Tabel Penyewaan</title>
</head>
<body>
<div id="container">
    <div id="header">
		<h1>Tabel Penyewaan</h1>	
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
	<a class="button2" href="sewa-add.php"><i class="fa fa-plus"></i> Tambah</a>
	<table>
		<tr><th>No.</th>
			<th>Tanggal</th>
			<th>Member</th>
			<th>Buku</th>
			<th>Harga</th>
			<th>Opsi</th>
		</tr>
		<?php
			$no = 1;
			foreach($db->tampil_sewa() as $tampil){
		?>
		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $tampil['tanggal']; ?></td>
			<td><?php echo $tampil['member']; ?></td>
			<td><?php echo $tampil['buku']; ?></td>
			<td><?php echo $tampil['harga']; ?></td>
			<td>
				<a class="button1" href="sewa-edit.php?id=<?php echo $tampil['id']; ?>&action=edit"><i class="fa fa-pencil"></i> Ubah</a>
				<a class="button" href="javascript:confirmDelete('../../controller/sewa-controller.php?id=<?php echo $tampil['id']; ?>&action=delete')"><i class="fa fa-close"></i> Hapus</a>			
			</td>
		</tr>
		<?php }	?>
	</table>
	</div>
	</div>
	<div id="footer">
		<center>Copyright &copy; 2017 Designed by Rivalbamen</center>
	</div>
</div>
</body>
</html>