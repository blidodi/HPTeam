<!DOCTYPE html>
<html>
	<head>
	<title>Operasi Tambah</title>
	</head>
<body>
<?php
					if(isset($_POST['tambah']) && $_POST['tambah'] == 'Tambah'){ //isset fungsinya untuk kita jika menekan tombol maka data akan dioperasi.
						include "koneksi.php"; //mengkonfigurasi dari koneksi.php untuk difungsikan di database

						$sql_data = "INSERT INTO `data` (`nama`,`nominal`,`kebutuhan`)
											VALUES ('".$_POST['nama']."',
													'".$_POST['nominal']."',
													'".$_POST['kebutuhan']."')";
						$hasil = mysql_query($sql_data); //mengeksekusi hasil dari script sql yang diidentifikasi

						$id_data = mysql_insert_id();//fungsi khusus yg sudah dibwa php untuk mengambil nilai terakhir saat direcord di database

						$sql_status = "INSERT INTO `status` (`id_data`,`status`)
											VALUES ('".$id_data."',
													'".$_POST['status']."')";
						$hasil = mysql_query($sql_status); //variabel $hasil sama kyak yg diatas tetapi yg dieksekusi adalah yg bag.terakhir variabel dr $sql table status. dan $hasil yang diatas itu sudah overwrite (ditumpuk)

						if(isset($hasil)){
							echo "Data Berhasil Disimpan <a href=\"koneksi_kwitansi.php\">Lihat Table</a>";
						} else {
							echo "Data Gagal Disimpan";
						}
					}
				?>

	<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" class="field"> 
		<table align="center" class="back">
		<tr>
			<td>Nama</td>
			<td><input type="text" name="nama"/></td>
		</tr>
		<tr>
			<td>Nominal</td>
			<td><input type="text" name="nominal"/></td>
		</tr>
		<tr>
			<td>Kebutuhan</td>
			<td><input type="text" name="kebutuhan"/></td>
		</tr>
		<tr>
			<td>
				<select name="status">
					<option value="">Pilih</option>
					<option value="kredit">Kredit</option>
					<option value="lunas">Lunas</option>
					<option value="hutang">Hutang</option>
				</select>
			</td>
		</tr>
		</table>
		<center><input type="submit" name="tambah" value="Tambah"></center>
		
	</form>
</body>
</html>

