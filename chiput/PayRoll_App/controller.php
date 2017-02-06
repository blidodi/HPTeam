<?php

include "config.php";

/**
* 
*/
class User
{
	//koneksi db
	function __construct()
	{
		$db = new koneksi_DB();
	}

	//registrasi proses
	function register_user($username, $password, $nama_lengkap, $no_hp, $level, $foto)
	{
		$password = md5($password);
		$sql_register = mysql_query("INSERT INTO tbl_admin (username,password,nama_lengkap,no_hp,level,foto)
			VALUES ('".mysql_real_escape_string($username)."',
					'".mysql_real_escape_string($password)."',
					'".mysql_real_escape_string($nama_lengkap).",
					'".mysql_real_escape_string($no_hp)."',
					'".mysql_real_escape_string($level)."',
					'".mysql_real_escape_string($foto)."')") or die(mysql_error());

		return $sql_register;
	} else {
		return false;
	}

	function cek_login($username, $password, $level)
	{
		$sql_login = mysql_query("SELECT ID_user FROM tbl_user WHERE username = '$username' AND password = '$password' AND level = '$level'");
		$data = mysql_fetch_array($sql_login);
		$row = mysql_num_rows($data);
		if ($row > 0) {
			$_SESSION['login'] = true;
			$_SESSION['id_user'] = $data['ID_user'];
			return true;
		} else {
			return false;
		}
	}

	function cek_tampil($level)
	{
		if (isset($level)) {
			$msg = $level;
		} else {
			$msg = ''; 
		}

		return $pesan;
	}

	$leveluser = array(1=>"user",2=>"admin");
	}
}

?>