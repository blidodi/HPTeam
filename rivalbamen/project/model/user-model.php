<?php
include 'database.php';
class User extends Database {

	/**Users**/
	//Menampilkan Data User
	function tampil_users()
	{
		$users = mysql_query("SELECT * FROM users");
		while($tampil = mysql_fetch_array($users)){
			$hasil[] = $tampil;
		}
		return $hasil;
	}
	//Menambah users
	function add_users($nama, $username, $password) 
	{
		mysql_query("INSERT INTO users VALUES('','$nama','$username','$password')");
	}

	//Menghapus users
	function delete_users($id){
		mysql_query("DELETE FROM users WHERE id='$id'");
	}

	//Mengubah users
	function edit_users($id, $nama, $username, $password){
		mysql_query("UPDATE users SET nama='$nama', username='$username', password='$password'
					WHERE id='$id'");
	}

	//Menampilkan data users di ubah users
	function tampil_edit_users($id){
		$users = mysql_query("SELECT * FROM users WHERE id='$id'");
		while($edit = mysql_fetch_array($users)){
			$hasil[] = $edit;
		}
		return $hasil;
	}

}

	?>