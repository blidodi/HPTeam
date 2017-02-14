<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Tambah Pengembalian</title>
		<link rel="stylesheet" type="text/css" href="../css/crud.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div id="header">
		<h1>Tambah Pengembalian</h1>
	</div>
	<form action="../proses.php?aksi=tambah_pengembalian" method="post">
		<table>
			<tr>
				<td>Kode Pengembalian</td>
				<td><input type="text" name="kode_kembali"></td>
			</tr>
			<tr>
				<td>Kode User</td>
				<td><input type="text" name="kode_user"></td>
			</tr>
			<tr>
				<td>Kode Buku</td>
				<td><input type="text" name="kode_buku"></td>
			</tr>
			<tr>
				<td>Kode Member</td>
				<td><input type="text" name="kode_member"></td>
			</tr>
			<tr>
				<td>Total Denda</td>
				<td><input type="text" name="total_denda"></td>
			</tr>
			<tr>
				<td></td>
				<td><input class ="button button1" type="submit" value="Simpan"></td>
			</tr>
		</table>
	</form>
</body>
</html>