<?php	
	
class Pegawai extends DB_con
	{
		public function addpegawai($new_jabatan, $new_namapegawai, $new_foto, $new_nopegawai, $new_rekening, $new_alamat)
		{
			$res = mysqli_query($this->conn, "INSERT INTO tbl_pegawai SET id_jabatan='$new_jabatan', nama_pegawai='$new_namapegawai', foto='$new_foto', no_pegawai='$new_nopegawai', no_rekening='$new_rekening', alamat='$new_alamat'");
			if (!$res){
				printf("Error: %s\n", mysqli_error($this->conn));
				exit();;
			}
			return $res;
		}

		public function showpegawai()
		{
			$res = mysqli_query($this->conn, "SELECT * FROM tbl_pegawai ORDER BY id_pegawai DESC");
	  		if (!$res) {
	 			printf("Error: %s\n", mysqli_error($this->conn));
	 			exit();
	 		}

	  		return $res;
		}

		public function editpegawai($new_id)
	 	{
	 		$res = mysqli_query($this->conn, "SELECT * FROM tbl_pegawai WHERE id_pegawai='$new_id'");
	  		if (!$res) {
	 			printf("Error: %s\n", mysqli_error($this->conn));
	 			exit();
	 		}

	 		return $res;
	 	}

	 	public function savepegawai($new_id,$new_jabatan, $new_namapegawai, $new_foto, $new_nopegawai, $new_rekening, $new_alamat)
	 	{
	 		$res = mysqli_query($this->conn, "UPDATE tbl_pegawai SET id_jabatan='$new_jabatan', nama_pegawai='$new_namapegawai', foto='$new_foto', no_pegawai='$new_nopegawai', no_rekening='$new_rekening', alamat='$new_alamat' WHERE id_pegawai=".$new_id);
	  		if (!$res) {
	 			printf("Error: %s\n", mysqli_error($this->conn));
	 			exit();
	 		}

	 		return $res;
	 	}

		public function removepegawai($new_id)
	 	{
	 		$res = mysqli_query($this->conn, "DELETE FROM tbl_pegawai WHERE id_pegawai='$new_id'");
	  		if (!$res) {
	 			printf("Error: %s\n", mysqli_error($this->conn));
	 			exit();
	 		}

	 		return $res;
	 	}
	}
