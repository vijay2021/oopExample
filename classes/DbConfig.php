<?php 
class DbConfig{
		
	private $host = "localhost:3309";	
	private $username = "root";	
	private $password = "";	
	private $db = "testData";	
	
	protected $connection; 


	public function __construct(){
		
		if(!isset($this->connection)){
		
			$this->connection = new mysqli($this->host, $this->username, $this->password, $this->db);
			
			if(!isset($this->connection)){
				echo 'there is some connection issue.';
				exit();
			}
			
		}
		
		return $this->connection;
		
	}	
	
	
}
?>