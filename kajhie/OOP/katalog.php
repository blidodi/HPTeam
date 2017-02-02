<?php

		class Tabel
		{
			var $jml_kolom, $kolom, $data;
			
			function header()
			{
				return "<table border=\"1\"><tr>";
			}
			function body($data){
				$this->kolom="";
				$this->data = $data;
			
				for ($i=0; $i < count($this->data); $i++) { 
					$this->kolom .="<td>".$this->data[$i]."</td>";
				}
				return $this->kolom;
			}

			function footer()
			{
				return "</tr></table>";
			}
		}

		$table = new Tabel();

		$data = array("Buku Tulis","Buku Belanja","Buku Tabungan","Buku Gambar");

		echo $table->header();
		echo $table->body($data);
		echo $table->footer();
?>