<?php

class DB_con
	{
		protected $db_name = 'hp_payroll';
		protected $db_user = 'root';
		protected $db_pass = '';
		protected $db_host = 'localhost';
		var $table,$view,$id,$conn,$message;
	
	 	function __construct()
	 	{
	  		$this->conn = mysqli_connect($this->db_host, $this->db_user, $this->db_pass, $this->db_name) or die('localhost connection problem'.mysql_error());
	 	}

	 	public function viewall($new_table)
	 	{
	 		$this->table = $new_table;
	  		$this->view = mysqli_query($this->conn, "SELECT * FROM ".$this->table);
	  		return $this->view;
	 	}	
	}
?>