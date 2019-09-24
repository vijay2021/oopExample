<?php 
class Test{
	
	const CONST_VALUE = "Test Value New.";
	
	
	protected function scopeTest(){
		
		echo self::CONST_VALUE;
		
	}
	
}

?>