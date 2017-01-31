<?php
	class Object
	{
		var $num1,$kolumn,$data;

		function header()
		{
			$header = "<table border='1'>
			<tr>
				<td>Baris</td>
				<td>Hewan
			</tr>";
			return $header;
		}

		function body($new_num1,$data)
		{
			$this->num1 = $new_num1;
			$this->data = $data;
			$this->kolom = "";
			for($i=0; $i < $this->num1; $i++){
				$this->kolom .="<tr><td>$i</td><td>".$this->data[$i]."</td></tr>";
			}
			return $this->kolom;
		}

		function footer()
		{
			$footer = "</table>";
			return $footer;
		}
	}

	$object = new Object();
	echo $object->header(); 
	$data = array('ayam','kucing','sapi','kambing');
	echo $object->body(4,$data); 
	echo $object->footer();

?>