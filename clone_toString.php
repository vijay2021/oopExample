<?php 
class Testing{
	
	private $test = "testting";
	
	public function __construct(){
		$this->test = "new testing";
	}
	
	/* public function __construct(){
		$this->test = 89;
	}
	
	( ! ) Catchable fatal error: Method Testing::__toString() must return a string value in C:\wamp64\www\test2\index.php on line 17
Call Stack
#	Time	Memory	Function	Location
1	0.0002	408472	{main}( )	...\index.php:0 */
	
	public function __ToString(){
		return $this->test;
	}
	
	public function getValue(){
		return "Test 2";
	}
	
}


echo $test = new Testing();

$test1 = clone $test;

echo $test1->getValue();

?>