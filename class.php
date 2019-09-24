<?php 
class Anchor{
	private $_string = "test";
	
	protected $perfix = "first";
	
	
	public function foo(){
		return $this->perfix.$this->_string;
	}
	
	public function testSelf(){
		return self::t();
	}
	
	public function testThis(){
		return $this::t();
	}
	
	public static function t(){
		return "newthing";
		
	}
	
}



class Firstparent extends Anchor{
	
	public function test(){
		
		//$this->perfix = null;
		$this->perfix = 'new2-';
		return parent::foo();
	}
	
	
}

class Child extends Firstparent{
	
	const CONSTTEST = "NewValue";
	
	public static function t(){
		return "childFunction";
	}
	
	public function childTest(){
		
		//$this->perfix = "New";
		
		//return parent::foo().self::CONSTTEST;
		
		return parent::testSelf();
	}
	
}


$test = new Child();

echo $test->childTest();

echo $test->testThis();




?>