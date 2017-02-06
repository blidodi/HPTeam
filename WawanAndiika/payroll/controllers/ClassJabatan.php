<?php	
	
class Jabatan extends DB_con
	{
	 	public function addjabatan($new_namajabatan, $new_gaji)
	 	{
	 		$res = mysqli_query($this->conn, "INSERT INTO tbl_jabatan SET nama_jabatan='$new_namajabatan', gaji='$new_gaji'");
	 		if (!$res) {
	 			printf("Error: %s\n", mysqli_error($this->conn));
	 			exit();
	 		}
	 	}

	 	public function savejabatan($new_namajabatan, $new_gaji, $new_id)
	 	{
	 		$res = mysqli_query($this->conn, "UPDATE tbl_jabatan SET nama_jabatan='$new_namajabatan', gaji='$new_gaji' WHERE id_jabatan='$new_id'");
	 		if (!$res) {
	 			printf("Error: %s\n", mysqli_error($this->conn));
	 			exit();
	 		}
	 	}

	 	public function showjabatan()
	 	{
	  		$res = mysqli_query($this->conn, "SELECT * FROM tbl_jabatan ORDER BY id_jabatan DESC");
	  		if (!$res) {
	 			printf("Error: %s\n", mysqli_error($this->conn));
	 			exit();
	 		}

	  		return $res;
	 	}

	 	public function editjabatan($new_id)
	 	{
	 		$res = mysqli_query($this->conn, "SELECT * FROM tbl_jabatan WHERE id_jabatan='$new_id'");
	  		if (!$res) {
	 			printf("Error: %s\n", mysqli_error($this->conn));
	 			exit();
	 		}

	 		return $res;
	 	}

	 	public function removejabatan($new_id)
	 	{
	 		$res = mysqli_query($this->conn, "DELETE FROM tbl_jabatan WHERE id_jabatan='$new_id'");
	  		if (!$res) {
	 			printf("Error: %s\n", mysqli_error($this->conn));
	 			exit();
	 		}

	 		return $res;
	 	}
	}
