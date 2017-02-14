<?php
include 'database.php';
class Member extends Database {

	/**Member**/
	//Menampilkan Data Member
	function tampil_member()
	{
		$member = mysql_query("SELECT * FROM member");
		while($tampil = mysql_fetch_array($member)){
			$hasil[] = $tampil;
		}
		return $hasil;
	}
	//Menambah member
	function add_member($no_member, $nama, $alamat, $telpon) 
	{
		mysql_query("INSERT INTO member VALUES('','$no_member','$nama','$alamat', '$telpon')");
	}

	//Menghapus member
	function delete_member($id){
		mysql_query("DELETE FROM member WHERE id='$id'");
	}

	//Mengubah member
	function edit_member($id, $no_member, $nama, $alamat, $telpon){
		mysql_query("UPDATE member SET no_member='$no_member', nama='$nama', 
						alamat='$alamat', telpon='$telpon'
					WHERE id='$id'");
	}

	//Menampilkan data member di ubah member
	function tampil_edit_member($id){
		$member = mysql_query("SELECT * FROM member WHERE id='$id'");
		while($edit = mysql_fetch_array($member)){
			$hasil[] = $edit;
		}
		return $hasil;
	}
}

?>