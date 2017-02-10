<?php 

class database{

	var $host	= "localhost";
	var $usname	= "root";
	var $pass	= "";
	var $db 	= "penyewaan_buku";

	function __construct(){
		mysql_connect($this->host, $this->usname, $this->pass);
		mysql_select_db($this->db);
	}

	//select user
	function user(){
		$data = mysql_query("select * from user");
		while($d = mysql_fetch_array($data)){
			$hasil[] = $d;
		}
		return $hasil;
	}

	//tambah user
	function input_user($kode_user,$nama,$username,$password){
	mysql_query("insert into user values('','$kode_user','$nama','$username','$password')");
	}

	//hapus user
	function hapus_user($id){
		mysql_query("delete from user where ID='$id'");
	}

	//edit user
	function edit_user($id){
		$data = mysql_query("select * from user where id='$id'");
		while($d = mysql_fetch_array($data)){
			$hasil[] = $d;
		}
		return $hasil;
	}
 
 	//update user
	function update_user($id,$kode_user,$nama,$username,$password){
		mysql_query("update user set kode_user='$kode_user', nama='$nama', username='$username', password='$password' where id='$id'");
	}


	//select buku
	function buku(){
		$data = mysql_query("select * from buku");
		while($d = mysql_fetch_array($data)){
			$hasil[] = $d;
		}
		return $hasil;
	}

	//tambah buku
	function input_buku($kode_buku,$isbn,$judul,$penulis,$penerbit,$tahun_terbit,$jenis){
	mysql_query("insert into buku values('','$kode_buku','$isbn','$judul','$penulis','$penerbit','$tahun_terbit','$jenis')");
	}
 	
	//hapus buku
	function hapus_buku($id){
		mysql_query("delete from buku where ID='$id'");
	}

 	//edit buku
	function edit_buku($id){
		$data = mysql_query("select * from buku where id='$id'");
		while($d = mysql_fetch_array($data)){
			$hasil[] = $d;
		}
		return $hasil;
	}

	//update buku
	function update_buku($id,$kode_buku,$isbn,$judul,$penulis,$penerbit,$tahun_terbit,$jenis){
		mysql_query("update buku set kode_buku='$kode_buku', isbn='$isbn', judul='$judul', penulis='$penulis', penerbit='$penerbit', tahun_terbit='$tahun_terbit', jenis='$jenis' where id='$id'");
	}


	//select member
	function member(){
		$data = mysql_query("select * from member");
		while($d = mysql_fetch_array($data)){
			$hasil[] = $d;
		}
		return $hasil;
	}

	//tambah member
	function input_member($kode_member,$nama,$alamat,$foto){
	mysql_query("insert into member values('','$kode_member','$nama','$alamat','$foto')");
	}

	//hapus member
	function hapus_member($id){
		mysql_query("delete from member where ID='$id'");
	}

	//edit member
	function edit_member($id){
		$data = mysql_query("select * from member where id='$id'");
		while($d = mysql_fetch_array($data)){
			$hasil[] = $d;
		}
		return $hasil;
	}
 
 	//update member
	function update_member($id,$kode_member,$nama,$alamat,$foto){
		mysql_query("update member set kode_member='$kode_member', nama='$nama', alamat='$alamat', foto='$foto' where id='$id'");
	}


	//select penyewa
	function penyewa(){
		$data = mysql_query("select * from penyewa");
		while($d = mysql_fetch_array($data)){
			$hasil[] = $d;
		}
		return $hasil;
	}

	//tambah penyewa
	function input_penyewa($kode_sewa,$kode_user,$kode_buku,$kode_member,$judul,$tanggal_pinjam,$tanggal_kembali){
	mysql_query("insert into penyewa values('','$kode_sewa','$kode_user','$kode_buku','$kode_member','$judul','$tanggal_pinjam','$tanggal_kembali')");
	}

	//hapus penyewa
	function hapus_penyewa($id){
		mysql_query("delete from penyewa where ID='$id'");
	}

	//edit penyewa
	function edit_penyewa($id){
		$data = mysql_query("select * from penyewa where id='$id'");
		while($d = mysql_fetch_array($data)){
			$hasil[] = $d;
		}
		return $hasil;
	}
 
 	//update penyewa
	function update_penyewa($id,$kode_sewa,$kode_user,$kode_buku,$kode_member,$judul,$tanggal_pinjam,$tanggal_kembali){
		mysql_query("update penyewa set kode_sewa='$kode_sewa', kode_user='$kode_user', kode_buku='$kode_buku', kode_member='$kode_member', judul='$judul',tanggal_pinjam='$tanggal_pinjam',tanggal_kembali='$tanggal_kembali' where id='$id'");
	}

	//Print Penyewaan
	function print_penyewa($id){
		$data = mysql_query("select * from penyewa where id='$id'");
		while($d = mysql_fetch_array($data)){
			$hasil[] = $d;
		}
		return $hasil;
	}


	//select pengembalian
	function pengembalian(){
		$data = mysql_query("select * from pengembalian");
		while($d = mysql_fetch_array($data)){
			$hasil[] = $d;
		}
		return $hasil;
	}

	//tambah pengembalian
	function input_pengembalian($kode_kembali,$kode_user,$kode_buku,$kode_member,$tanggal_kembali,$total_denda){
	mysql_query("insert into pengembalian values('','$kode_kembali','$kode_user','$kode_buku','$kode_member','$tanggal_kembali','$total_denda')");
	}

	//hapus pengembalian
	function hapus_pengembalian($id){
		mysql_query("delete from pengembalian where ID='$id'");
	}

	//edit pengembalian
	function edit_pengembalian($id){
		$data = mysql_query("select * from pengembalian where id='$id'");
		while($d = mysql_fetch_array($data)){
			$hasil[] = $d;
		}
		return $hasil;
	}
 
 	//update pengembalian
	function update_pengembalian($id,$kode_kembali,$kode_user,$kode_buku,$kode_member,$tanggal_kembali,$total_denda){
		mysql_query("update pengembalian set kode_kembali='$kode_kembali', kode_user='$kode_user', kode_buku='$kode_buku', kode_member='$kode_member', tanggal_kembali='$tanggal_kembali', total_denda='$total_denda' where id='$id'");
	}


	//select kwitansi
	function kwitansi(){
		$data = mysql_query("select * from kwitansi");
		while($d = mysql_fetch_array($data)){
			$hasil[] = $d;
		}
		return $hasil;
	}

	//tambah kwitansi
	function input_kwitansi($no,$nama,$uang_sejumlah,$untuk_pembayaran,$status){
	mysql_query("insert into kwitansi values('','$no','$nama','$uang_sejumlah','$untuk_pembayaran','$status')");
	}

	//hapus kwitansi
	function hapus_kwitansi($id){
		mysql_query("delete from kwitansi where ID='$id'");
	}

	//edit member
	function edit_kwitansi($id){
		$data = mysql_query("select * from kwitansi where id='$id'");
		while($d = mysql_fetch_array($data)){
			$hasil[] = $d;
		}
		return $hasil;
	}
 
 	//update member
	function update_kwitansi($id,$no,$nama,$uang_sejumlah,$untuk_pembayaran,$status){
		mysql_query("update kwitansi set no='$no', nama='$nama', uang_sejumlah='$uang_sejumlah', untuk_pembayaran='$untuk_pembayaran', status='$status' where id='$id'");
	}

} 

?>