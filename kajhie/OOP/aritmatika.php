<?php

class Variabel
	{
		var $a;
		var $b;
		public $tanda;

		function set_name($new_a,$new_b)
		{
			$this->a = $new_a;
			$this->b = $new_b;
		}

		function get_tambah()
		{
			$message = $this->a + $this->b;
			$this->tanda = "+";
			return $message;
		}
	

	function get_kurang(){
		$message =  $this->a - $this->b;
		$this->tanda = "-";
		return $message;
	}

	function get_kali(){
		$message=  $this->a * $this->b;
		$this->tanda = "*";
		return $message;
	}

	function get_bagi(){
		$message =  $this->a / $this->b;
		$this->tanda = "/";
		return $message;
	}

}


	// $pesan = new Variabel();

	// $pesan -> set_name(5,4);

	// echo $pesan->a." ".$pesan->tanda."".$pesan->b."=".$pesan->get_tambah();
?>