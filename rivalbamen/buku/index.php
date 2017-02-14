<?php 
	include 'database.php';
	$db = new Database();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script>
		function confirmDelete(delUrl) {
		  if (confirm("Apakah Yakin dihapus?")) {
		    document.location = delUrl;
		  }
		}
	</script>
	<title>Tabel Buku</title>
</head>
<body>
<div id="container">
    <div id="header">
		<h1>Tabel Buku</h1>	
	</div>
	<div class="form">
	<a class="button2" href="buku-tambah.php"><i class="fa fa-plus"></i> Tambah</a>
	<table>
		<tr><th>No.</th>
			<th>ISBN</th>
			<th>Judul</th>
			<th>Pengarang</th>
			<th>Penerbit</th>
			<th>Opsi</th>
		</tr>
		<?php
			$no = 1;
			foreach($db->tampil_buku() as $tampil){
		?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $tampil['isbn']; ?></td>
			<td><?php echo $tampil['judul']; ?></td>
			<td><?php echo $tampil['pengarang']; ?></td>
			<td><?php echo $tampil['penerbit']; ?></td>
			<td>
				<a class="button1" href="buku-ubah.php?id=<?php echo $tampil['id']; ?>&action=ubah"><i class="fa fa-pencil"></i> Ubah</a>
				<a class="button" href="javascript:confirmDelete('proses.php?id=<?php echo $tampil['id']; ?>&action=hapus')"><i class="fa fa-close"></i> Hapus</a>			
			</td>
		</tr>
		<?php }	?>
	</table>
	</div>
	<div id="footer">
		<center>Copyright &copy; 2017 Designed by Rivalbamen</center>
	</div>
</div>
</body>
</html>