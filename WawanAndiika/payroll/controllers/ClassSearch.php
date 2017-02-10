<?php

	/**
	* 
	*/
	class Search extends DB_con
	{
		
		public function searchpegawai($new_search)
		{
			$res = mysqli_query($this->conn, "SELECT * FROM tbl_pegawai WHERE nama_pegawai LIKE '%$new_search%' OR no_pegawai LIKE '%$new_search%' or no_rekening LIKE '%$new_search%'");
			if (!$res) {
	 			printf("Error: %s\n", mysqli_error($this->conn));
	 			exit();
	 		}
	 		return $res;
		}

		public function searchjabatan($new_search)
		{
			$res = mysqli_query($this->conn, "SELECT * FROM tbl_jabatan WHERE nama_jabatan LIKE '%$new_search%' OR gaji LIKE '%$new_search%'");
			if (!$res) {
	 			printf("Error: %s\n", mysqli_error($this->conn));
	 			exit();
	 		}
	 		return $res;
		}

		public function searchuser($new_search)
		{
			$res = mysqli_query($this->conn, "SELECT * FROM tbl_user WHERE username LIKE '%$new_search%'");
			if (!$res) {
	 			printf("Error: %s\n", mysqli_error($this->conn));
	 			exit();
	 		}
	 		return $res;
		}
	}