<?php
	class Object
	{
		var $kolom,$data;

		function header()
		{
			$header = "		<table border='1'>
				<tr>
					<td>Baris</td>
					<td>Hewan
				</tr>";
			return $header;
		}

		function body($data)
		{
			$this->data = $data;
			$this->kolom = "";
			for($i=0; $i < count($this->data['binatang']); $i++){
				$this->kolom .="
				<tr>
					<td>$i</td>
					<td>".$this->data['binatang'][$i]."</td>
				</tr>";
			}
			return $this->kolom;
		}

		function footer()
		{
			$footer = "
			</table>";
			return $footer;
		}
	}

?>