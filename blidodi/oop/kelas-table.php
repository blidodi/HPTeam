<?php

class Table {
	var $jml_kolom, $kolom, $data;

	function header() 
	{
		return "<table border=\"1\"><tr>";
	}

	function body($data) 
	{
		//$this->var1 = $nilai1;
		//$this->jml_kolom = $jml_kolom;
		$this->kolom = "";
		$this->data = $data;

			
		for($i=0; $i < count($this->data); $i++) {

			$this->kolom .= "<td>".$this->data[$i]."</td>";

		}

		return $this->kolom;
		
	}

	function footer() 
	{
		return "</tr></table>";
	}
}

