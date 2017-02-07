<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="../../css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>Tambah Buku</title>
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
		<li><a class="active" href="#buku-view.php"><i class="fa fa-book"></i> Buku</a></li>
		<li><a href="../penyewaan/sewa-view.php"><i class="fa fa-shopping-cart"></i> Penyewaan</a></li>
		<li><a href="../pengembalian/kembali-view.php"><i class="fa fa-retweet"></i> Pengembalian</a></li>
		<li style="float:right"><a href="../../logout.php"><i class="fa fa-sign-out"></i> Logout</a></li>
	</ul>
	<div id="body">
	<div class="form">
	<p><a class="p-color" href="buku-view.php">Tabel Buku</a> / Tambah Buku</p>
	<form action="../../controller/buku-controller.php?action=add" method="post">
		<label>Judul :</label>
		<input type="text" name="judul" />
		<label>Pengarang :</label>
		<input type="text" name="pengarang" />
		<label>Penerbit :</label>
		<input type="text" name="penerbit" />
		<label>Tahun :</label>
		<input type="text" name="tahun" />
		<label>ISBN :</label>
		<input type="text" name="isbn" />
		<label>Harga :</label>
		<input type="text" name="harga" />
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