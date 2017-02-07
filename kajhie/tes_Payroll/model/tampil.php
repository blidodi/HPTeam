<?php
include 'koneksi';
class tampil extends data_base
{
	var $tabel = "user";
	function tampil_data(){
		$data = mysql_query("SELECT * FROM".$this->table);
		while ($dm = mysql_fetch_array($data)) {
			$hasil [] = $d;
		}
		return $hasil;
	}
}

?>