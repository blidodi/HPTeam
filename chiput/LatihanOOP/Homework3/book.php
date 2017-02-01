<?php
class Buku 
{
	var $pesan, $action, $method, $value, $name, $type, $class;

	function __construct($action_now, $method_now)
	{
		$this->action = $action_now;
		$this->method = $method_now;
	}

	function form_header()
	{
		$this->pesan = "<form action='".$this->action."'methods='".$this->method."''>";
		return $this->pesan;
	}

	function form_input($type,$name,$value,$class)
	{
		$this->type = $type;
		$this->name = $name;
		$this->value = $value;
		$this->class = $class;

		$this->pesan = "<input type='".$this->type."' name='".$this->name."' value='".$this->value."' class='".$this->class."'/>";
		return $this->pesan;
	}

	function form_label($name)
	{
		$this->name = $name;
		$this->pesan = "<label>".$this->name."</label>";
		return $this->pesan;
	}

	function form_footer()
	{
		$this->pesan = "</form>";
		return $this->pesan;
	}

	
}



?>