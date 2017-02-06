<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="../../css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>Tambah Member</title>
</head>
<body>
<div id="container">
    <div id="header">
		<h1>Tabel Member</h1>
	</div>
	<ul>
		<li><a href="../../dashboard.php"><i class="fa fa-home"></i> Home</a></li>
		<li><a href="../user/user-view.php"><i class="fa fa-users"></i> Users</a></li>
		<li><a class="active" href="#member-view"><i class="fa fa-id-card"></i> Member</a></li>
		<li><a href="../buku/buku-view.php"><i class="fa fa-book"></i> Buku</a></li>
		<li style="float:right"><a href="../../logout.php"><i class="fa fa-sign-out"></i> Logout</a></li>
	</ul>
	<div class="form">
	<p><a class="p-color" href="member-view.php">Tabel Member</a> / Tambah Member</p>
	<form action="../../controller/member-controller.php?action=add" method="post">
		<label>No. Member :</label>
		<input type="text" name="no_member" />
		<label>Nama :</label>
		<input type="text" name="nama" />
		<label>Alamat :</label>
		<input type="text" name="alamat" />
		<label>Telpon :</label>
		<input type="text" name="telpon" />
		<br/>
		<input type="submit" name="simpan" value="Simpan">
	</form>
	</div>
	<div id="footer">
		<center>Copyright &copy; 2017 Designed by Rivalbamen</center>
	</div>
</div>
</body>
</html>