<?php
	/**
	* 
	*/
	class Dashboard extends DB_con
	{
		
		public function showpegawai()
		{
			$res = mysqli_query($this->conn, "SELECT * FROM tbl_pegawai");

	  		return $res;
		}

		public function showjabatan()
		{
			$res = mysqli_query($this->conn, "SELECT * FROM tbl_jabatan");

	  		return $res;
		}

		public function showgaji()
		{
			$res = mysqli_query($this->conn, "SELECT tbl_pegawai.status FROM tbl_gaji INNER JOIN tbl_pegawai ON tbl_gaji.id_pegawai = tbl_pegawai.id_pegawai WHERE status=1");
			return $res;
		}

		public function showuser()
		{
			$res = mysqli_query($this->conn, "SELECT * FROM tbl_user");

	  		return $res;
		}

		public function pegawaidashboard()
		{
			$res = mysqli_query($this->conn, "SELECT * FROM tbl_pegawai ORDER BY id_pegawai DESC LIMIT 8");
	  		if (!$res) {
	 			printf("Error: %s\n", mysqli_error($this->conn));
	 			exit();
	 		}

	  		return $res;
		}
	}