<?php 
	include 'database.php';
	$db = new database();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>Data Buku</title>
</head>
<body>
	<div id="header">
		<h1>Penyewaan Buku</h1>	
	</div>
	<ul>
  <li><a href="dashboard.php"><i class="fa fa-home" aria-hidden="true"></i>
 Home</a></li>
  <li><a href="tampil_user.php"><i class="fa fa-users" aria-hidden="true"></i>
 User</a></li>
  <li><a href="tampil_buku.php"><i class="fa fa-list-alt" aria-hidden="true"></i>
 Buku</a></li>
</ul>
	<a class="button button1" href="input_buku.php">Tambah</a>
	<a class="button button4" href="Logout.php">Logout</a>
	<table border="1">
		<tr>
			<th><i class="fa fa-sort" aria-hidden="true"></i> ID</th>
			<th><i class="fa fa-sort" aria-hidden="true"></i> Kode Buku</th>
			<th><i class="fa fa-sort" aria-hidden="true"></i> ISBN</th>
			<th><i class="fa fa-sort" aria-hidden="true"></i> Judul</th>
			<th><i class="fa fa-sort" aria-hidden="true"></i> Penulis</th>
			<th><i class="fa fa-sort" aria-hidden="true"></i> Penerbit</th>
			<th><i class="fa fa-sort" aria-hidden="true"></i> Opsi</th>
		</tr>
		<?php
			$no = 1;
			foreach($db->buku() as $x){
		?>
		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $x['kode_buku']; ?></td>
			<td><?php echo $x['isbn']; ?></td>
			<td><?php echo $x['judul']; ?></td>
			<td><?php echo $x['penulis']; ?></td>
			<td><?php echo $x['penerbit']; ?></td>
			<td>
				<a class="button button2" href="edit_buku.php?id=<?php echo $x['id']; ?>&aksi=edit">Edit</a>
				<a class="button button3" href="proses.php?id=<?php echo $x['id']; ?>&aksi=hapus">Hapus</a>			
			</td>
		</tr>
		<?php } ?>
		<table>
			<tr bgcolor="#CCCCCC" style="font-family: font-family: Verdana, Geneva, sans-serif; color: #FFFFFF" align="right">
				<br/>
				<br/>	
				<td colspan="7">Copyright @ 2017 Penyewaan Buku</td>
			</tr>
			</table>
	</table>
</body>
</html>