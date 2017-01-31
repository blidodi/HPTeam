<?php

	class Aritmatik
	{
		var $bil1, $bil2, $hasil;

		public $operasi;

		function __construct($bilangan_satu, $bilangan_dua)
		{
			$this->bil1 = $bilangan_satu;
			$this->bil2 = $bilangan_dua;
		}

		function tambah()
		{
			$this->hasil = $this->bil1 + $this->bil2;
			$this->operasi = "+";
		}

		function kurang()
		{
			$this->hasil = $this->bil1 - $this->bil2;
			$this->operasi = "-";
		}

		function kali()
		{
			$this->hasil = $this->bil1 * $this->bil2;
			$this->operasi = "x";
		}

		function bagi()
		{
			$this->hasil = $this->bil1 / $this->bil2;
			$this->operasi = "/";
		}

		function hasil()
		{
			return $this->hasil;
		}
	}


	$tambah = new Aritmatik(12, 6);
	$tambah->tambah();
	echo $tambah->bil1." ".$tambah->operasi." ".$tambah->bil2." = ".$tambah->hasil();