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

		function gajinya($new_id)
		{
			$res = mysqli_query($this->conn, "SELECT tbl_jabatan.gaji FROM tbl_pegawai INNER JOIN tbl_jabatan ON tbl_pegawai.id_jabatan = tbl_jabatan.id_jabatan WHERE tbl_jabatan.id_jabatan='$new_id'");
			if (!$res) {
	 			printf("Error: %s\n", mysqli_error($this->conn));
	 			exit();
	 		}
	 		$result = mysqli_fetch_array($res);
	 		$message = $result['gaji'];
	 		if($message == ""){
	 			$message = "Unknown";
	 		}
	 		return $message;
		}

		function savegaji($new_id,$new_jabatan,$new_absen,$new_bonus,$new_gaji)
		{
			$time= date( 'Y-m-d H:i:s' );

			$res = mysqli_query($this->conn, "INSERT INTO tbl_gaji SET id_pegawai='$new_id', id_jabatan='$new_jabatan', absen='$new_absen', bonus='$new_bonus', total_gaji='$new_gaji', tanggal_dibayar='$time'");
			if (!$res) {
	 			printf("Error: %s\n", mysqli_error($this->conn));
	 			exit();
	 		}
		}

		function updatestatus($new_id)
		{
			$res = mysqli_query($this->conn, "UPDATE tbl_pegawai SET status=1 WHERE id_pegawai=".$new_id);
		}

		public function showpegawai()
		{
			$res = mysqli_query($this->conn, "SELECT * FROM tbl_pegawai WHERE status=0 ORDER BY id_pegawai DESC");
	  		if (!$res) {
	 			printf("Error: %s\n", mysqli_error($this->conn));
	 			exit();
	 		}

	  		return $res;
		}
	}