<?php 
	include '../../model/user-model.php';
	$db = new User();
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
	<title>Tabel User</title>
</head>
<body>
<div id="container">
    <div id="header">
		<h1>Tabel User</h1>	
	</div>
	<ul>
		<li><a href="../../dashboard.php"><i class="fa fa-home"></i> Home</a></li>
		<li><a class="active" href="#user-view"><i class="fa fa-users"></i> Users</a></li>
		<li><a href="../member/member-view.php"><i class="fa fa-id-card"></i> Member</a></li>
		<li><a href="../buku/buku-view.php"><i class="fa fa-book"></i> Buku</a></li>
		<li style="float:right"><a href="../../logout.php"><i class="fa fa-sign-out"></i> Logout</a></li>
	</ul>
	<div class="form">
	<a class="button2" href="user-add.php"><i class="fa fa-plus"></i> Tambah</a>
	<table>
		<tr><th>No.</th>
			<th>Nama</th>
			<th>Username</th>
			<th>Opsi</th>
		</tr>
		<?php
			$no = 1;
			foreach($db->tampil_users() as $tampil){
		?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $tampil['nama']; ?></td>
			<td><?php echo $tampil['username']; ?></td>
			<td>
				<a class="button1" href="user-edit.php?id=<?php echo $tampil['id']; ?>&action=edit"><i class="fa fa-pencil"></i> Ubah</a>
				<a class="button" href="javascript:confirmDelete('../../controller/user-controller.php?id=<?php echo $tampil['id']; ?>&action=delete')"><i class="fa fa-close"></i> Hapus</a>			
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