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
	<script src="my_js.js"></script>
	<script>
		function confirmDelete(delUrl) {
		  if (confirm("Apakah Yakin dihapus?")) {
		    document.location = delUrl;
		  }
		}
		
	</script>

	<title>Tabel Buku</title>
</head>
<body style="overflow:hidden;">
<div id="container">
    <div id="header">
		<h1>Sistem Penyewaan Buku</h1>	
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
	<a class="button2" href="buku-add.php"><i class="fa fa-plus"></i> Tambah</a>
	<table>
		<tr>
			<th></th>
			<th>Judul</th>
			<th>Pengarang</th>
			<th>Penerbit</th>
			<th>Opsi</th>
		</tr>
		<?php
			foreach($db->tampil_buku() as $tampil){
		?>
		<tr>
			<td>
			<details>
				<summary></summary>
				<img align="left" class="cover" src="<?php echo "../../image/".$tampil['cover']; ?>">
				<p align="left">ISBN : <?php echo $tampil['isbn']; ?></p>
				<p align="left">Tahun : <?php echo $tampil['tahun']; ?></p>
				<p align="left">Kategori :  <?php echo $tampil['kategori']; ?></p>
				<p align="left">Harga : <?php echo $tampil['harga']; ?></p>
			</details></td>
			<td><?php echo $tampil['judul']; ?></td>
			<td><?php echo $tampil['pengarang']; ?></td>
			<td><?php echo $tampil['penerbit']; ?></td>
			<td>
				<!--<a class="button3" id="popup" onclick="div_show('id')"><i class="fa fa-eye"></i></a>
					<div id="abc">
						 Popup Div Starts Here 
						<div id="popupContact" >
						 Contact Us Form 
							<form class="formpop" id="form" method="post">
							<i id="close" class="fa fa-times" onclick ="div_hide()"></i>
							<h2>Detail</h2>
							<hr>
							<img class="cover" src="<?php //echo "../../image/".$tampil['cover']; ?>">
							</form>
						</div>
						 Popup Div Ends Here 
					</div> -->

				<a class="button1" href="buku-edit.php?id=<?php echo $tampil['id']; ?>&action=edit"><i class="fa fa-pencil"></i></a>
				<a class="button" href="javascript:confirmDelete('../../controller/buku-controller.php?id=<?php echo $tampil['id']; ?>&action=delete')"><i class="fa fa-close"></i></a>			
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