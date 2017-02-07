<?php

	/**
	* 
	*/
	class Gaji extends DB_con
	{
		
		function jabatannya($new_id)
		{
			$res = mysqli_query($this->conn, "SELECT tbl_jabatan.nama_jabatan FROM tbl_pegawai INNER JOIN tbl_jabatan ON tbl_pegawai.id_jabatan = tbl_jabatan.id_jabatan WHERE tbl_jabatan.id_jabatan='$new_id'");
			if (!$res) {
	 			printf("Error: %s\n", mysqli_error($this->conn));
	 			exit();
	 		}
	 		$result = mysqli_fetch_array($res);
	 		$message = $result['nama_jabatan'];
	 		if($message == ""){
	 			$message = "Unknown";
	 		}
	 		return $message;
		}
	}