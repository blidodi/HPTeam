<?php
class Koneksi
{
	protected $db = 'kwitansi';
	protected $user = 'root';
	protected $pass = '';
	protected $host = 'localhost';

	function __construct(argument)
	{
		$konek = mysql_connect($this->db_host, $this->user, $this->pass);
	}
}
?>