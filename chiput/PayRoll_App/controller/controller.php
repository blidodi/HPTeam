<?php

include '../model/config.php';

/**
* 
*/
class Table
{
	public function __construct()
	{
		$db = new Config();
	}

	public function tampil_Kar()
	{
		$sql_karyawan = mysql_query("SELECT * FROM tbl_karyawan");
		while ($hasil = mysql_fetch_array($sql_karyawan)) {
			$result[] = $hasil;
		}
		return $result;
	}

	public function tampil_Depart()
	{
		$sql_departemen = mysql_query("SELECT tbl_departemen.*,tbl_karyawan.nik as nik FROM tbl_departemen JOIN tbl_karyawan WHERE tbl_departemen.ID_department=tbl_karyawan.ID_karyawan ORDER BY ID_department DESC");
		
		// $sql_departemen = mysql_query("SELECT * FROM tbl_departemen");
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
class Form
{
	
	function __construct()
	{
		$db = new Config();
	}

	public function input_user($username, $password, $nama, $nohp)
	{
		$sql_user = mysql_query("INSERT INTO tbl_user (username,password,nama_lengkap,no_hp) VALUES ('$username', '$password', '$nama', '$nohp')");
		
		while ($hasil = mysql_fetch_array($sql_user)) {
			$result[] = $hasil;
		}
		return $result;
	}
}

/**
* 
*/
class User
{
	public function __construct()
	{
		$db = new Config();
	}

	public function cek_login($username, $password)
	{
		//$pass = md5($password);
		$sql_user = mysql_query("SELECT ID_user FROM tbl_user WHERE username = '$username' AND password = '$password'");
		$hasil = mysql_fetch_array($sql_user);

		if (mysql_num_rows($hasil) > 0) {
				
			$_SESSION['username'] = $_hasil['username'];
			$_SESSION['password'] = $_hasil['password'];

			return true;
		} else if (!$hasil) {
			mysql_error();
			header('location: form_login.php');
		} else {
			return false;
		}
	}
	
	public function cek_logout()
	{
		session_start();
		session_destroy();
		
		header('location: form_login.php');	
	}


}

?>