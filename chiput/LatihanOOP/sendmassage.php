<?php
class Message 
{
	var $name;
	var $pesan;

	function set_name($new_name, $pesan_kata) 
	{
	 $this->name = $new_name;
	 $this->pesan = $pesan_kata;
	}

	function get_pesan() {
	 $psan = $this->name. " Selamat !!! "."<br>".$this->pesan;
		return $psan;
	}
}

$message = new Message();

$message->set_name("Chiput","Anda berhasil menang undian berhadiah mobil Jazz");

echo $message->get_pesan();

?>