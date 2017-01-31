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

		function get_message()
		{
			$message = $this->name + $this->pesan;
			return $message;
		}
	}

	$pesan = new Pengirim();

	$pesan -> set_name(5,4);

	echo $pesan -> get_message();
?>