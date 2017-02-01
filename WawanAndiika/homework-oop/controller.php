<?php
	/**
	* Class Form 
	*/
	class Form
	{
		var $action, $method, $value, $name, $type;
		
		function __construct($new_action, $new_method)
		{
			$this->action = $new_action;
			$this->method = $new_method;
		}

		function header()
		{
			$message = '<form action="'.$this->action.'" method="'.$this->method.'" >';
			return $message;
		}

		function footer(){
			$message = '</form>';
			return $message;
		}

		function input($new_type,$new_nama,$new_value)
		{
			$this->type = $new_type;
			$this->name = $new_nama;
			$this->value = $new_value;
			$message = '<input type="'.$this->type.'" name="'.$this->name.'" placeholder="'.$this->value.'"/>';
			return $message;
		}

		function label($new_name)
		{
			$this->name = $new_name;
			$message = '<label>'.$this->name.'</label>';
			return $message;
		}
	}

	/**
	* Class Koneksi Dabatas
	*/
	
	class DB_con
	{
		protected $db_name = 'hp_training';
		protected $db_user = 'root';
		protected $db_pass = '';
		protected $db_host = 'localhost';
		var $table,$view,$uname,$pass,$id;
	
	 	function __construct()
	 	{
	  		$conn = mysql_connect($this->db_host, $this->db_user, $this->db_pass, $this->db_name) or die('localhost connection problem'.mysql_error());
	  		mysql_select_db($this->db_name, $conn);
	 	}
	 	

	 	public function select($username,$pass)
	 	{
  		  	$this->uname = $username;
		  	$this->pass = $pass;
		  	$res = mysql_query("SELECT * FROM tbl_user WHERE username=$this->uname and pass=$this->pass");
  		  	return $res;
	 	}

	 	public function ViewAll($new_table)
	 	{
	 		$this->table = $new_table;
	  		$this->view = mysql_query("SELECT * FROM ".$this->table);
	  		return $this->view;
	 	}
	 	
	 	public function insert($username,$pass)
		{
		  	$this->uname = $username;
		  	$this->pass = $pass;
		  	$res = mysql_query("INSERT tbl_user(username,pass) VALUES('$this->uname','$this->pass')");
  		  	return $res;
		}
	}
?>