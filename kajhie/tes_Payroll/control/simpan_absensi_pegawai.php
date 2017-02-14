<?php 
	// if (isset($_POST['simpan']) && $_POST['simpan'] == 'Simpan') {

		require '../model/koneksi.php';
		$db = new data_base();

		$id = $_POST['id'];
		$tanggal = $_POST['tanggal'];
		$absen = $_POST['absen'];
		$jumlah = count($id);

		for ($i=0; $i < $jumlah; $i++) { 
			$query = "INSERT INTO `absensi`(`id_pegawai`,`tanggal`,`keterangan`) VALUES('".$id[$i]."','".$tanggal[$i]."','".$absen[$i]."')";
			$result = $db->key($query);
		}
		
		if ($result) {
			echo "Data Berhasil di Simpan";
		}else{
			echo "Data Gagal disimpan!";
		}
	// }
 ?>