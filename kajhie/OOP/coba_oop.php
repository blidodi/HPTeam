<?php
class Pengirim 
	{
		var $name;
		var $pesan;

		function set_name($new_name,$new_pesan)
		{
			$this->name = $new_name;
			$this->pesan = $new_pesan;
		}
		
		// function get_name(){
		// 	return $this->name;
		// 	re
		// }
		
		// function set_pesan($isi_pesan)
		// {
		// 	$this->pesan = $isi_pesan;
		// }

		function get_message()
		{
			$message = $this->name." : ".$this->pesan;
			return $message;
		}
	}

// class Pesan extends Pengirim
// 	{
// 		var $pesan;	
// 		function set_pesan($isi_pesan)
// 		{
// 			$this->pesan = $isi_pesan;
// 		}

// 		function get_message()
// 		{
// 			$message = $this->name." : ".$this->pesan;
// 			return $message;
// 		}
// 	}

	$pesan = new Pengirim();

	$pesan -> set_name("Kajhie","Pulaaaang !!!");
	// $pesan -> set_pesan("PING !!!");

	echo $pesan -> get_message();
?>