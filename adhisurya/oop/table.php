<?php

	class Table {
		//var $var1, $var2;
		var $jml_kolom, $kolom, $data;

		function header()
		{
			return "<table border=\"1\"><tr>";
		}
		
		//function body($nilai1, $nilai2)
		function body($data)
		{
			//$this->var1 = $nilai1;
			//$this->var2 = $nilai2; 
			//return "<td>$nilai1</td><td>$nilai2</td>";
			$this->kolom = "";
			$this->data = $data;

			for($i=0; $i < count($this->data); $i++) 
			{

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

$data = array ("Kucing", "Pinguin", "Cicak", "Ayam", "Kambing", "Burung");

//echo $table->header();
//echo $table->body($data);
//echo $table->body("kolom1", "kolom2");
//echo $table->footer();

?>