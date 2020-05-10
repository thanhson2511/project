<?php 
	class Connection{
		private $severname = "localhost";
		private $username = "root";
		private $password = "";
		private $dbname = "php_blog_2019-08-11";

		function __construct($table = ""){
			$this->conn = new mysqli($this->severname, $this->username, $this->password, $this->dbname);
			if ($this->conn->connect_error) {
			echo "Ket noi that bai" . $this->conn->connect_error;
			exit();

		}else{
		// echo "Ket noi thanh cong";
			}
			mysqli_set_charset($this->conn,'UTF8');
			$this->table = $table;
		}
	}
 ?>