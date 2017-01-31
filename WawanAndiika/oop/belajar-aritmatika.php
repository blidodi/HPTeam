<?php
	class Aritmatika
	{

		var $bil1, $bil2, $hasil;

		//* function __construct($new_bil1,$new_bil2)
		//* {
		//* 	$this->bil1 = $new_bil1;
		//* 	$this->bil2 = $new_bil2;
		//* 	$hasiltambah = $this->bil1+$this->bil2;
		//* 	$hasilkurang = $this->bil1-$this->bil2;
		//* 	$hasilkali = $this->bil1*$this->bil2;
		//* 	$hasilbagi = $this->bil1/$this->bil2;
		//* 	$this->hasil = 	'Hasil tambah '.$hasiltambah.
		//* 					'<br/> Hasil kurang '.$hasilkurang.
		//* 					'<br/> Hasil kali '.$hasilkali.
		//* 					'<br/> Hasil bagi : '.$hasilbagi;
		//* }

		function tambah($new_bil1,$new_bil2)
		{
			$this->bil1 = $new_bil1;
			$this->bil2 = $new_bil2;
			$hasil = $this->bil1+$this->bil2;
			$this->hasil = 'Hasil '.$this->bil1.' + '.$this->bil2.' = '.$hasil;
			
		}

		function kurang($new_bil1,$new_bil2)
		{
			$this->bil1 = $new_bil1;
			$this->bil2 = $new_bil2;
			$hasil = $this->bil1-$this->bil2;
			$this->hasil = 'Hasil '.$this->bil1.' - '.$this->bil2.' = '.$hasil;
		}

		function kali($new_bil1,$new_bil2)
		{
			$this->bil1 = $new_bil1;
			$this->bil2 = $new_bil2;
			$hasil = $this->bil1*$this->bil2;
			$this->hasil = 'Hasil '.$this->bil1.' * '.$this->bil2.' = '.$hasil;
		}

		function bagi($new_bil1,$new_bil2)
		{
			$this->bil1 = $new_bil1;
			$this->bil2 = $new_bil2;
			$hasil = $this->bil1/$this->bil2;
			$this->hasil = 'Hasil '.$this->bil1.' : '.$this->bil2.' = '.$hasil;
		}

		function aritmatika_hasil()
		{
			$message = $this->hasil;
			return $message;
		}
	}
	$aritmatik = new Aritmatika();
	$aritmatik->bagi(10,2);
	echo $aritmatik->aritmatika_hasil();
?>