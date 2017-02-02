<!DOCTYPE html>
<html>
<head>
	<title>Data List Buku</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<style type="text/css">
		table tr td,table tr th {
			padding: 10px 15px;
		}
	</style>
</head>
<body>
	<div class="wrapper">
	<table>
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
			include "koneksi.php";
			$query = mysqli_query($koneksi, "SELECT * FROM tbl_buku ORDER BY id DESC");
			while ($result = mysqli_fetch_array($query)) { ?>
			 	<tr>
					<td><?= $result['judul'];?></td>
					<td><?= $result['penulis'];?></td>
					<td><?= $result['penerbit'];?></td>
					<td><?= $result['tahun'];?></td>
					<td><?= $result['isbn'];?></td>
					<td style="padding: 0px;"><a class="edit" href="edit.php?id=<?= $result['id'];?>">Edit</a>
						<a class="hapus" href="delete.php?remove=<?= $result['id'];?>" onclick="return confirm('Yakin mau dihapus?')">Hapus</a>
					</td>
				</tr>
			<?php }	?>		</tbody>
	</table>
	<a class="tambah" href="tambah.php">Tambah Data</a>
	</div>
</body>
</html>