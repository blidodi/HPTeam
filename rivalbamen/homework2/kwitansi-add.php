<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>Tambah Kwitansi</title>
</head>
<body>
	<div id="container">
    	<div id="header">
			<h1>Tabel Kwitansi</h1>
		</div>
		<ul>
			<li><a href="dashboard.php"><i class="fa fa-home"></i> Home</a></li>
			<li><a href="user-table.php"><i class="fa fa-users"></i> User</a></li>
			<li><a class="active" href="kwitansi-table.php"><i class="fa fa-credit-card-alt"></i> Kwitansi</a></li>
			<li style="float:right"><a href="logout.php"><i class="fa fa-sign-out"> </i> Logout</a></li>
		</ul>
	<div class="form">	
	<p><a class="p-color" href="kwitansi-table.php">Tabel Kwitansi</a> / Tambah Kwitansi</p>
	<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
		<input type="hidden" name="no" />
		<label>Nama</label>
		<input type="text" name="nama" />
		<label>Nominal</label>
		<input type="text" name="nominal" />
		<label>Kebutuhan</label>
		<input type="text" name="kebutuhan" />
		<label>Status</label>
		<select name="bayar">
			<option value="">--Pilih--</option>
			<option value="1">Tunai</option>
			<option value="2">Kredit</option>
		</select>
		<br/>
		<input type="submit" name="simpan" value="Simpan">
	</form>
	</div>
	<?php
		if(isset($_POST['simpan']) && $_POST['simpan'] == 'Simpan') {
			include "koneksi.php";

			$sql = "INSERT INTO `kwitan` (`nama`, `nominal`, `kebutuhan`, `bayar`)
							VALUES ('".$_POST['nama']."',
									'".$_POST['nominal']."',
									'".$_POST['kebutuhan']."',
									'".$_POST['bayar']."')";
			$result = mysql_query($sql);
			$id = mysql_insert_id();
			if(isset($result)) {
				header('location:kwitansi-table.php');
			} else {
				echo "Data Gagal Disimpan";
			}
		}

	?>
		<div id="footer">
			<center>Copyright &copy; 2017 Designed by Rivalbamen</center>
		</div>
	</div>	
</body>
</html>