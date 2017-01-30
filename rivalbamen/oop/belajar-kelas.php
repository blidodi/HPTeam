<?php
	class Person 
	{
		var $name;
		function set_name($new_name) 
		{
			$this->name = $new_name;
		}
		function get_name()
		{
			return $this->name;
		}
	}

	class Car extends Person 
	{
		var $car;
		function set_car($car_type) 
		{
			$this->car = $car_type;
		}
		function get_messege() {
			$messege = $this->name." Punya Mobil dengan Merk ".$this->car;
			return $messege;
		}
	}

	$person = new Car();
	$person->set_name("Andrian");
	$person->set_car("Bentley");
	echo $person->get_messege();

?>