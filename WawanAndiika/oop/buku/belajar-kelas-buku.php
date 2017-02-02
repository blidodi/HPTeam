<?php
	/**
	* Class Buku
	*/
	class Buku
	{
		var $judul,$penulis,$terbit;

		function set_buku($new_judul,$new_penulis,$new_terbit)
		{
			// Set variabel 
			$this->judul = $new_judul;
			$this->penulis = $new_penulis;
			$this->terbit = $new_terbit;
		}
		function tampil()
		{
			if($this->judul == "" || $this->penulis == "" || $this->terbit == "" )
			{
				$message =  'Masukan data yang lengkap dong';
			} 
			else
			{
				$message = '<br/>Judul Buku: '.$this->judul.'<br/> Penulis: '.$this->penulis.'<br/> Tahun Terbit: '.$this->terbit;	
			}
			return $message;
		}
	}

	/**
	* Class Form
	*/
	class Form 
	{
		var $message, $action, $method, $value, $name, $type;
		
		function __construct($action_now,$method_now)
		{
			$this->action = $action_now;
			$this->method = $method_now;
		}

		function form_header()
		{
			$this->message = '<form action="'.$this->action.'" method="'.$this->method.'">';
			return $this->message;
		}

		function form_footer()
		{
			$this->message = "</form>";
			return $this->message;
		}

		function form_input($type,$name,$value)
		{
			$this->type = $type;
			$this->name = $name;
			$this->value = $value;

			$this->message = '<input type="'.$this->type.'" name="'.$this->name.'" value="'.$this->value.'"/>';
			return $this->message;
		}

		function form_label($name)
		{
			$this->name = $name;
			$this->message = '<label>'.$this->name.'</label>';
			return $this->message;
		}
	}
?>