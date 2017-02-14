<?php	
	
class User extends DB_con
	{
		public function checkuser($new_username, $new_pass)
	 	{
		  	$res = mysqli_query($this->conn, "SELECT * from tbl_user WHERE username='$new_username' AND password='$new_pass'");
		  	if (!$res) {
			    printf("Error: %s\n", mysqli_error($this->conn));
			    exit();
			}
  		  	return $res;
	 	}

	 	public function adduser($new_username, $new_pass, $new_status)
	 	{
	 		$res = mysqli_query($this->conn, "INSERT INTO tbl_user SET username='$new_username', password='$new_pass', role='$new_status'");
	 		if (!$res) {
	 			printf("Error: %s\n", mysqli_error($this->conn));
	 			exit();
	 		}
	 	}

	 	public function saveuser($new_id, $new_username,$new_pass, $new_status)
	 	{
	 		$res = mysqli_query($this->conn, "UPDATE tbl_user set username='$new_username', password='$new_pass', role='$new_status' WHERE id_user='$new_id'");
	 		if (!$res){
	 			printf("Error: %\n", mysqli_error($this->conn));
	 			exit();
	 		}
	 	}

	 	public function edituser($new_id)
	 	{
	 		$res = mysqli_query($this->conn, "SELECT * FROM tbl_user WHERE id_user='$new_id'");
	  		if (!$res) {
	 			printf("Error: %s\n", mysqli_error($this->conn));
	 			exit();
	 		}

	 		return $res;
	 	}

	 	public function showuser()
	 	{
	  		$res = mysqli_query($this->conn, "SELECT * FROM tbl_user ORDER BY id_user DESC");
	  		if (!$res) {
	 			printf("Error: %s\n", mysqli_error($this->conn));
	 			exit();
	 		}

	  		return $res;
	 	}

	 	public function removeuser($new_id)
	 	{
	 		$res = mysqli_query($this->conn, "DELETE FROM tbl_user WHERE id_user='$new_id'");
	  		if (!$res) {
	 			printf("Error: %s\n", mysqli_error($this->conn));
	 			exit();
	 		}

	 		return $res;
	 	}
	}
