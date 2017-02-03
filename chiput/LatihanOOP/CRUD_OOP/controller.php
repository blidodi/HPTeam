<?php

class Koneksi_DB
{
	protected $host = 'localhost';
	protected $user = 'root';
	protected $pass = '';

	protected $db = 'kwitansi_db';

	var $table, $user, $pass, $iduser, $idrole, $iddata, $idstatus, $idbuku, $namauser, $stus;

	function __construct()
	{
		$connect = mysql_connect($this->host, $this->user, $this->pass, $this->db);
		mysql_select_db($this->db, $connect);
	}

	function tampilAkun($username, $password, $id_user, $id)
	{
		$this->user = $username;
		$this->pass = $password;
		$this->iduser = $id_user;
		$this->idrole = $id;
		$sql_akun = mysql_query("SELECT user .*,user_role.status as status FROM user JOIN user_role WHERE user.id_user=$this->iduser =user_role.id=$this->idrole ORDER BY id_user=$this->iduser DESC");

		return $sql_akun;	
	}

	function tampilKwitansi($id_data, $id)
	{
		$this->iddata = $id;
		$this->idstatus = $id_data;
		$sql_kwitansi = mysql_query("SELECT data.*,status as status FROM data JOIN status WHERE data.id=$this->iddata=status.id_data=$this->idstatus= ORDER BY id=$this->iddata DESC");

		return $sql_kwitansi;
	}

	function tampilBuku($id)
	{
		$this->idbuku = $id;
		$sql_buku = mysql_query("SELECT * FROM buku ORDER BY id=$this->idbuku DESC");

		return $sql_buku;
	}

	function insertAkun($nama_user, $username, $password, $id_user, $id, $status)
	{
		$this->namauser = $nama_user;
		$this->user = $username;
		$this->pass = $password;
		$this->iduser = $id_user;
		$this->idrole = $id;
		$this->stus = $status;
		$sql_akun = mysql_query("INSERT INTO user(nama_user=$this->namauser, username=$this->user, pass=$this->pass) VALUES('$this->namauser','$this->user','$this->pass')");
  		  	
  		return $sql_akun;

  		$id = mysql_insert_id();

  		$sql_role = mysql_query("INSERT INTO user_role (id=$this->idstatus, status=$this->stus) VALUES ('$id','$this->stus')");
  		
  		return $sql_role;
	}
}

?>