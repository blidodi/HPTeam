<?php
include 'database.php';
class Buku extends Database {

	/**Buku**/
	//Menampilkan Data Buku
	var $hasil;
	function tampil_buku()
	{
		$buku = mysql_query("SELECT buku.id AS id, buku.judul, buku.pengarang, buku.
							penerbit, kategori_buku.kategori, kategori_buku.harga, buku.cover 
							FROM buku, kategori_buku
							WHERE buku.kategori=kategori_buku.kode");
		while($tampil = mysql_fetch_array($buku)){
			$hasil[] = $tampil;
		}
		return $hasil;
	}

	//Menambah Buku
	function add_buku($judul, $pengarang, $penerbit, $tahun, $isbn, $kategori, $cover) 
	{
		mysql_query("INSERT INTO buku VALUES('','$judul','$pengarang','$penerbit', '$tahun', '$isbn', '$kategori', '$cover')");
	}

	//Menghapus Buku
	function delete_buku($id){
		mysql_query("DELETE FROM buku WHERE id='$id'");
	}

	//Mengubah Buku
	function edit_buku($id, $judul, $pengarang, $penerbit, $tahun, $isbn, $kategori, $cover){
		mysql_query("UPDATE buku SET judul='$judul', pengarang='$pengarang', 
						penerbit='$penerbit', tahun='$tahun', isbn='$isbn', 
						kategori='$kategori', cover='$cover'
					WHERE id='$id'");
	}

	//Menampilkan data buku di ubah buku
	function tampil_edit_buku($id){
		$buku = mysql_query("SELECT * FROM buku WHERE id='$id'");
		while($edit = mysql_fetch_array($buku)){
			$this->hasil[] = $edit;
		}
		return $this->hasil;
	}
	//menampilkan kategri
	function tampil_kategori(){
		$kategori = mysql_query("SELECT * FROM kategori_buku");
		while($buku = mysql_fetch_array($kategori)){
			$hasil[] = $buku;
		}
		return $hasil;
	}
	
} 

	?>