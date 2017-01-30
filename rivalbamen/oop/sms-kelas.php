<?php
	class Sms
	{
		var $nama;
		var $pesan;

		function set_sms($nama, $pesan)
		{
			$this->nama = $nama;
			$this->pesan = $pesan;
		}

		function get_sms()
		{
			$sms = $this->nama." Selamat ".$this->pesan;
			return $sms;
		}
	}

	$sms = new Sms();
	$sms->set_sms("Rival","Sore");
	echo $sms->get_sms();

?>