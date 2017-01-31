<?php
class Person 
{
	var $name;

	function set_name($new_name) 
	{
	 $this->name = $new_name;
	}

	function get_name() {
	 return $this->name;
	}
}

/**
* 
*/
class Flower extends Person
{
	var $flower;
	function set_flower($flower_name)
	{
		$this->flower = $flower_name;
	}

	function get_pesan(){
		$pesan = $this->name." Suka Bunga ". $this->flower;
		return $pesan;
	}
}

$person = new Flower();

$person->set_name("Chiput");
$person->set_flower("Melati");

echo $person->get_pesan();

?>