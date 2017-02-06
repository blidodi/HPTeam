<?php	
	
class Pegawai extends DB_con
	{
		public function addpegawai($new_namapegawai, $new_foto, $new_nopegawai, $new_absen, $neww_alamat)
		{
			$res = mysqli_query($this->conn, "INSERT INTO tbl_pegawai (nama_pegawai,foto,no_pegawai,absen,alamat) VALUES ('$new_pagawai','$new_foto','$new_nopegawai','$new_absen','$new_absen')");
			if (!$res){
				printf("Error: %s\n", mysqli_error($this->conn));
				exit();;
			}
		}
	}
