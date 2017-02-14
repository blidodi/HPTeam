<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="../css/crud.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>Tambah Kwitansi</title>
</head>
<body>
    <div id="header">
		<h1>Tambah Kwitansi</h1>
	</div>
	<form action="../proses.php?aksi=tambah_kwitansi" method="post">
		<table>
			<tr>
				<td>No.</td>
				<td><input type="text" name="no"></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>Uang Sejumlah</td>
				<td><input type="text" name="uang_sejumlah"></td>
			</tr>
			<tr>
				<td>Untuk Pembayaran</td>
				<td><input type="text" name="untuk_pembayaran"></td>
			</tr>
			<tr>
				<td>Status</td>
				<td><input type="text" name="status"></td>
			</tr>
			<tr>
				<td></td>
				<td><input class ="button button1" type="submit" value="Simpan"></td>
			</tr>
		</table>
	</form>
</body>
</html>