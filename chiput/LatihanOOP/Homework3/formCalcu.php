<?php

class Kalkulator
{

	var $pesan, $label, $tambah, $kurang, $kali, $bagi, $hasil, $action, $method, $type, $name, $value;
	
	function __construct($aksi, $metode)
	{
		$this->action = $aksi;
		$this->method = $metode;
	}

	function form()
	{
		$this-pesan = "<form action='".$this->action."'methods='".$this->method."'>";
		return $this->pesan;
	}

	function inputform($type, $name, $value)
	{
		$this->type = $type;
		$this->name = $name;
		$this->value = $value;

		$this->pesan = "<input type='".$this->type."' name='".$this->name."' value='".$this->value."'/>";
		return $this->pesan;
	}

	function labelform($label)
	{
		$this->label = $label;
		$this->pesan = "<label>".$this->label."</label>";
		return $this->pesan;
	}

	function operasi($angka1, $angka2)
	{
		$this->tambah = $angka1 + $angka2;
		$this->kurang = $angka1 - $angka2;
		$this->kali = $angka1 * $angka2;
		$this->bagi = $angka1 / $angka2;
	}

	function endform()
	{
		$this->pesan = "</form";
		return $this->pesan;
	}

}

?>