<?php

class Table {
	var $jml_kolom, $kolom, $data;

	function header() 
	{
		return "<table border=\"1\"><tr>";
	}

	function body($jml_kolom, $data) 
	{
		//$this->var1 = $nilai1;
		$this->jml_kolom = $jml_kolom;
		$this->kolom = "";
		$this->data = $data;

			
		for($i=0; $i < $this->jml_kolom; $i++) {

			$this->kolom .= "<td>".$this->data[$i]."</td>";

		}

		return $this->kolom;
		
	}

	function footer() 
	{
		return "</tr></table>";
	}
}

$table = new Table();

$data = array ("Kucing", "Babi", "Pinguin", "Cicak", "Ayam");

echo $table->header();
echo $table->body(5, $data);
echo $table->footer();