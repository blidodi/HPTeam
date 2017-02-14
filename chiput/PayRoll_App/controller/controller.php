<?php

include '../model/config.php';

/**
* 
*/
class Table extends Config
{

	var $nama;

	public function tampil_akun()
	{
		$sql_akun = mysql_query("SELECT * FROM tbl_user ORDER BY ID_user DESC");
		while ($hasil = mysql_fetch_array($sql_akun)) {
			$result[] = $hasil;
		}
		return $result;
	}

	public function tampil_namaAkun($nama)
	{
		$sql_namaAkun = mysql_query("SELECT nama FROM tbl_user WHERE nama = '$nama'");
		while ($hasil = mysql_fetch_array($sql_namaAkun)) {
			$result[] = $hasil;
		}
		return $result;
	}


	public function tampil_Kar()
	{
		$sql_karyawan = mysql_query("SELECT * FROM tbl_karyawan ORDER BY ID_karyawan DESC");
		while ($hasil = mysql_fetch_array($sql_karyawan)) {
			$result[] = $hasil;
		}
		return $result;
	}

	public function tampil_Depart()
	{
		$sql_departemen = mysql_query("SELECT * FROM tbl_departemen ORDER BY ID_department DESC");
		
		while ($hasil = mysql_fetch_array($sql_departemen)) {
			$result[] = $hasil;
		}
		return $result;
	}

	public function edit_Depart($kode)
	{
		$sql_departemen = mysql_query("SELECT * FROM tbl_departemen WHERE kode_depart ='$kode'");
		
		while ($hasil = mysql_fetch_array($sql_departemen)) {
			$result[] = $hasil;
		}
		return $result;
	}

	public function tampil_profil($id)
	{
		$sql_profil = mysql_query("SELECT `tbl_karyawan`.* ,`username` as `username`,`password` as `password` FROM `tbl_karyawan` JOIN `tbl_user` WHERE `tbl_karyawan`.`ID_karyawan` = `$id` AND `tbl_user`.`ID_user` = `$id`");
		while ($hasil = mysql_fetch_array($sql_profil)) {
			$result[] = $hasil;
		}
		return $result;
	}

}

/**
* 
*/
class Form extends Config
{
	
	public function input_user($nama, $username, $password)
	{
		$sql_user = mysql_query("INSERT INTO tbl_user (nama, username,password,level) VALUES ('$nama', '$username', '$password','2')");
		
		while ($hasil = mysql_fetch_array($sql_user)) {
			$result[] = $hasil;
		}
		return $result;
	}

	public function input_kar($id, $nik, $nama, $tempatlhr, $tgllhr, $almt, $agama, $status, $tlpn, $foto)
	{
		$sql_kar = mysql_query("INSERT INTO tbl_karyawan(ID_karyawan, nik,nama,tempat_lahir,tanggal_lahir,alamat,agama,status_nikah,no_tlpn,foto) 
			VALUES ('$id','$nik','$nama','$tempatlhr','$tgllhr','$almt','$agama','$status','$tlpn','$foto')");

		return $sql_kar;
	}

	public function input_depart($kode_depart, $jbtn, $gajipkok, $tnjg)
	{
		$sql_depart = mysql_query("INSERT INTO tbl_departemen(kode_depart, jabatan, gajipokok, tunjangan) 
			VALUES ('$kode_depart','$jbtn','$gajipkok','$tnjg')");

		return $sql_depart;
	}

	public function del_depart($id_ser)
	{
		$sql_depart = mysql_query("DELETE FROM tbl_departemen WHERE ID_department='$id_ser'");

		return $sql_depart;
	}

	public function del_karyawan($id_kar)
	{
		$sql_depart = mysql_query("DELETE FROM tbl_karyawan WHERE ID_karyawan='$id_kar'");

		return $sql_depart;
	}

	public function update_depart($id_depart, $kode_depart, $jbtn, $gaji, $tunjangan)
	{
		$sql_depart = mysql_query("UPDATE tbl_departemen SET kode_depart='$kode_depart', jabatan='$jbtn', gajipokok='$gaji', tunjangan='$tunjangan' WHERE ID_department='$id_depart' OR die(mysql_error()");

		return $sql_depart;
	}

}

/**
* 
*/
class User extends Config
{

	public function cek_login($username, $password)
	{
		$pass = md5($password);
		$sql_user = mysql_query("SELECT * FROM tbl_user WHERE username = '$username' AND password = '$password'");

		 if (!$sql_user) {
			mysql_error();
			exit();
		}
			return $sql_user;
	}

}
	
	
?>