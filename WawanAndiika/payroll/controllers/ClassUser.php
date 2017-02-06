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

	 	public function adduser($new_username, $new_pass)
	 	{
	 		$res = mysql_query($this->conn, "INSERT INTO tbl_user (username,password) values ('$new_username','$new_pass'");
	 		if (!$res) {
	 			printf("Error: %s\n", mysqli_error($this->conn));
	 			exit();
	 		}
	 	}

	 	public function updateuser($new_username,$new_pass)
	 	{
	 		$res = mysqli_query($this->conn, "UPDATE tbl_user set username='$new_username', password='$new_pass'");
	 		if (!$res){
	 			printf("Error: %\n", mysqli_error($this->conn));
	 			exit();
	 		}
	 	}
	}
