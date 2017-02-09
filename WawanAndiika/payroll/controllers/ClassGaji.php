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

			$res = mysqli_query($this->conn, "INSERT INTO tbl_gaji SET id_pegawai='$new_id', id_jabatan='$new_jabatan', absen='$new_absen', bonus='$new_bonus', total_gaji='$new_gaji', tanggal_diproses='$time'");
			if (!$res) {
	 			printf("Error: %s\n", mysqli_error($this->conn));
	 			exit();
	 		}
		}

		function updatestatus($new_id)
		{
			$res = mysqli_query($this->conn, "UPDATE tbl_pegawai SET status=1 WHERE id_pegawai=".$new_id);
		}

		function resetstatus()
		{
			$res = mysqli_query($this->conn, "UPDATE tbl_pegawai SET status=0 WHERE status=2");
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

		function savefinal($new_pph,$new_finalgaji,$new_id,$new_idpegawai)
		{
			$time= date( 'Y-m-d H:i:s' );

			$res = mysqli_query($this->conn, "UPDATE tbl_gaji SET pph='$new_pph', final_gaji='$new_finalgaji', tanggal_dibayar='$time' WHERE id_gaji=".$new_id);
			$res2 = mysqli_query($this->conn, "UPDATE tbl_pegawai SET status=2 WHERE id_pegawai=".$new_idpegawai);
			if (!$res) {
	 			printf("Error: %s\n", mysqli_error($this->conn));
	 			exit();
	 		}
		}

		public function showprintgaji()
		{
			$res = mysqli_query($this->conn, "SELECT tbl_gaji.id_gaji, tbl_gaji.id_pegawai, tbl_gaji.id_jabatan, tbl_gaji.bonus, tbl_gaji.total_gaji, tbl_gaji.tanggal_diproses, tbl_pegawai.status, tbl_pegawai.nama_pegawai, tbl_pegawai.no_pegawai, tbl_pegawai.no_rekening, tbl_pegawai.foto FROM tbl_gaji INNER JOIN tbl_pegawai ON tbl_gaji.id_pegawai = tbl_pegawai.id_pegawai WHERE status=1 OR status=2 ORDER BY status");
			return $res;
		}

		public function printgaji($new_id)
		{
			$res = mysqli_query($this->conn, "SELECT tbl_gaji.id_gaji, tbl_gaji.id_pegawai, tbl_gaji.id_jabatan, tbl_gaji.absen, tbl_gaji.bonus, tbl_gaji.total_gaji, tbl_gaji.tanggal_diproses, tbl_gaji.pph, tbl_gaji.final_gaji, tbl_gaji.tanggal_dibayar, tbl_pegawai.status, tbl_pegawai.nama_pegawai, tbl_pegawai.no_pegawai, tbl_pegawai.no_rekening, tbl_pegawai.foto, tbl_pegawai.alamat FROM tbl_gaji INNER JOIN tbl_pegawai ON tbl_gaji.id_pegawai = tbl_pegawai.id_pegawai WHERE id_gaji=".$new_id);
			return $res;
		}

		public function  finalgaji()
		{
			$res = mysqli_query($this->conn, "");
			return $res;
		}
	}