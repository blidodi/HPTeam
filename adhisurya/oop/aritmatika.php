<?php
	class Aritmatika
	{
		var $bil1, $bil2, $hasil;

		function __construct($bilangan_satu, $bilangan_dua)
		{
			$this->bil1 = $bilangan_satu;
			$this->bil2 = $bilangan_dua;
		}

		function tambah()
		{
			$this->hasil = $this->bil1 + $this->bil2;
		}

		function kurang()
		{
			$this->hasil = $this->bil1 - $this->bil2;
		}

		function kali()
		{
			$this->hasil = $this->bil1 * $this->bil2;
		}

		function bagi()
		{
			$this->hasil = $this->bil1 / $this->bil2;
		}

		function hasil()
		{
			return $this->hasil;
		}
	}
		
	$tambah = new Aritmatika(12, 6);
	$tambah->bagi();
	echo $tambah->hasil();	
?>