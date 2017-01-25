<!DOCTYPE html>
<html>
<head>
<title>Operasi Tambah</title>
</head>
<body>
<?php
					if(isset($_POST['tambah']) && $_POST['tambah'] == 'Tambah'){
						include "koneksi.php";

						$sql = "INSERT INTO `data` (`nama`,`nominal`,`kebutuhan`)
											VALUES ('".$_POST['nama']."',
													'".$_POST['nominal']."',
													'".$_POST['kebutuhan']."')";
						$hasil = mysql_query($sql);

						$id = mysql_insert_id();

						$sql = "INSERT INTO `status` (`id_data`,`status`)
											VALUES ('".$id."',
													'".$_POST['status']."')";
						$hasil = mysql_query($sql);

						if($hasil){
							echo "Data Berhasil Disimpan <a href=\"koneksi_kwitansi.php\">Lihat Table</a>";
						} else {
							echo "Data Gagal Disimpan";
						}
					}
				?>

	<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" class="field">
		<table>

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
		
		<input type="submit" name="tambah" value="Tambah">
	</form>
</body>
</html>

