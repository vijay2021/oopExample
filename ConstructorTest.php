<?php 
class ConstructorTest{
	
	const TESTDATA = "New Test \n";
	
	private $dataTest = "NewData \n";
	
	public function __construct(){
			echo self::foo();	
	}
	
	
	public function foo(){
		echo $this->dataTest;			
	}
	
	
	
	
}

?>