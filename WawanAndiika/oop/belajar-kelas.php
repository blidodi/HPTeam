<?php 
	class Sms
	{
		var $nama;
		var $sms;

		function set_sms($new_nama, $new_sms)
		{
			$this->nama = $new_nama;
			$this->sms = $new_sms;
		}

		function get_sms()
		{
			$message = 'Kirim pesan ke '.$this->nama.' isi pesan : '.$this->sms;
			return $message;
		}
	}
	
	$sms = new Sms();
	$sms->set_sms("wawan","pulang");
	echo $sms->get_sms();
?>
<br/>
<?php
	class Person
	{
		var $name;

		function set_person($new_name)
		{
			$this->name = $new_name;
		}

		function get_person()
		{
			return $this->name;
		}
	}

	class Mobil extends Person
	{
		var $car;

		function set_car($car_type)
		{
			$this->car = $car_type;
		}

		function get_message()
		{
			$message = $this->name.' mempunyai mobil '.$this->car;
			return $message;
		}
	}

	$person = new Mobil();
	$person->set_person("Wawan");
	$person->set_car("Mewah");
	echo $person->get_message();
?>