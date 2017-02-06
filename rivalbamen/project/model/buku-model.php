<?php
include 'database.php';
class Buku extends Database {

	/**Buku**/
	//Menampilkan Data Buku
	function tampil_buku()
	{
		$buku = mysql_query("SELECT * FROM buku");
		while($tampil = mysql_fetch_array($buku)){
			$hasil[] = $tampil;
		}
		return $hasil;
	}

	//Menambah Buku
	function tambah_buku($judul, $pengarang, $penerbit, $tahun, $isbn, $harga) 
	{
		mysql_query("INSERT INTO buku VALUES('','$judul','$pengarang','$penerbit', '$tahun', '$isbn', '$harga')");
	}

	//Menghapus Buku
	function hapus_buku($id){
		mysql_query("DELETE FROM buku WHERE id='$id'");
	}

	//Mengubah Buku
	function ubah_buku($id, $judul, $pengarang, $penerbit, $tahun, $isbn, $harga){
		mysql_query("UPDATE buku SET judul='$judul', pengarang='$pengarang', 
					penerbit='$penerbit', tahun='$tahun', isbn='$isbn', harga='$harga'
					WHERE id='$id'");
	}

	//Menampilkan data buku di ubah buku
	function tampil_edit_buku($id){
		$buku = mysql_query("SELECT * FROM buku WHERE id='$id'");
		while($edit = mysql_fetch_array($buku)){
			$hasil[] = $edit;
		}
		return $hasil;
	}

	
} 

	?>