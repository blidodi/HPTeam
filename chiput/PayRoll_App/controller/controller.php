<?php

include '../model/config.php';

/**
* 
*/
class Table extends Config
{

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
		//$sql_departemen = mysql_query("SELECT tbl_departemen.*,tbl_karyawan.nik as nik FROM tbl_departemen JOIN tbl_karyawan WHERE tbl_departemen.ID_department=tbl_karyawan.ID_karyawan ORDER BY ID_department DESC");
		$sql_departemen = mysql_query("SELECT * FROM tbl_departemen ORDER BY ID_department DESC");
		
		while ($hasil = mysql_fetch_array($sql_departemen)) {
			$result[] = $hasil;
		}
		return $result;
	}

	

	

	// public function tampil_Gaji()
	// {
	// 	$sql_gaji = mysql_query("SELECT tbl_departemen.*,tbl_karyawan.nik as nik FROM tbl_departemen JOIN tbl_karyawan WHERE tbl_departemen.ID_department=tbl_karyawan.ID_karyawan ORDER BY ID_department DESC");
		
	// 	// $sql_departemen = mysql_query("SELECT * FROM tbl_departemen");
	// 	while ($hasil = mysql_fetch_array($sql_departemen)) {
	// 		$result[] = $hasil;
	// 	}
	// 	return $result;
	// }

}

/**
* 
*/
class Form extends Config
{
	
	public function input_user($username, $password, $nama, $nohp)
	{
		$sql_user = mysql_query("INSERT INTO tbl_user (username,password,nama_lengkap,no_hp) VALUES ('$username', '$password', '$nama', '$nohp')");
		
		while ($hasil = mysql_fetch_array($sql_user)) {
			$result[] = $hasil;
		}
		return $result;
	}

	public function input_kar($nik, $nama, $tempatlhr, $tanggallhr, $almt, $tlpn, $jbtn, $status, $username, $password)
	{
		
		$sql_kar = mysql_query("INSERT INTO tbl_karyawan(nik,nama,tempat_lahir,tanggal_lahir,alamat,no_tlpn,jabatan,status,username,password) 
			VALUES ('$nik','$nama','$tempatlhr','$tanggallhr','$almt','$tlpn','$jbtn','$status','$username','$password')");

		return $sql_kar;
	}

	public function input_depart($kode_depart, $jbtn, $gajipkok, $tnjg)
	{
		$sql_depart = mysql_query("INSERT INTO tbl_departemen(kode_depart, jabatan, gajipokok, tunjangan) 
			VALUES ('$kode_depart','$jbtn','$gajipkok','$tnjg')");

		return $sql_depart;
	}

	public function input_Foto($file)
	{
		$sql_foto = mysql_query("INSERT INTO tbl_foto(nama_file) VALUES('$file')");
	}


	// public function input_gaji()
	// {
	// 	$sql_gaji = mysql_query("INSERT INTO tbl_gaji(kode_gaji, gajibulan, tgl_transfer, absensi, no_rek, gajipokok, tunjangan, uang)")
	// }

}

/**
* 
*/
class User extends Config
{

	public function cek_login($username, $password)
	{
		//$pass = md5($password);
		$sql_user = mysql_query("SELECT * FROM tbl_user WHERE username = '$username' AND password = '$password'");
		//$hasil = mysql_fetch_array($sql_user);

		 if (!$sql_user) {
			mysql_error();
			exit();
		}
			return $sql_user;
	}

}
	
	
?>