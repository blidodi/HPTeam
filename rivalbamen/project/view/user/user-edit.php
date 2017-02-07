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
	<title>Ubah User</title>
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
			<li><a href="../penyewaan/sewa-view.php"><i class="fa fa-shopping-cart"></i> Penyewaan</a></li>
			<li><a href="../pengembalian/kembali-view.php"><i class="fa fa-retweet"></i> Pengembalian</a></li>
			<li style="float:right"><a href="../../logout.php"><i class="fa fa-sign-out"></i> Logout</a></li>
		</ul>
		<div id="body">
		<div class="form">
		<p><a class="p-color" href="user-view.php">Tabel User</a> / Ubah User</p>
		<form action="../../controller/user-controller.php?action=edit" method="post"action>
		<?php
			foreach($db->tampil_edit_users($_GET['id']) as $edit){
		?>
		<input type="hidden" name="id" value="<?php echo $edit['id'] ?>" />
		<label>Nama :</label>
		<input type="text" name="nama" value="<?php echo $edit['nama'] ?>" />
		<label>Username :</label>
		<input type="text" name="username" value="<?php echo $edit['username'] ?>" />
		<label>Password :</label>
		<input type="password" name="password" value="<?php echo $edit['password'] ?>" />
		<br/>
		<input type="submit" name="ubah" value="Ubah">
		<?php } ?>
	</form>
		</div>
		</div>>
	<div id="footer">
		<center>Copyright &copy; 2017 Designed by Rivalbamen</center>
	</div>
</div>
</body>
</html>