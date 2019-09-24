<?php 
abstract class AbstractClass{
	
	abstract protected function prefixName($name);
	
}


class C1 extends AbstractClass{
	public function prefixName($name, $age=23) {
		return "{$name} {$age}";
	}
}


$test = new C1;

echo $test->prefixName('Vijay');



?>