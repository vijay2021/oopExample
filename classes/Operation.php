<?php 
include_once 'DbConfig.php';


class Operation extends DbConfig{
	
	public function __construct(){
		parent:: __construct();
	}
	
	
	public function getData($query){
		
		$result = $this->connection->query($query);
		
		if($result==false){
			echo "there is some problem in conection";
			return false;
			
		}
		
		$getArray = array();
		
		while($resultData = $result->fetch_assoc()){
			$getArray[] = $resultData;
		}
		
		return $getArray;
				
		
	}
	
	
	public function execute($query){
		
		$result = $this->connection->query($query);
		
		if($result==false){
			return false;
		}else{
			return true;
		}
		
		
	}
	
	
	public function delete($id, $table){
		
		$sql = "DELETE from ".$table." where id='".$id."'";
		
		$result = $this->connection->query($sql);
		if($result==false){
			echo "There is some problem in case of delete.";
			return false;
		}else{
			return true;
		}
		
	}
	
	public function escape_string_free($value){
		return $this->connection->real_escape_string($value);
		
	}
	
	
}


?>