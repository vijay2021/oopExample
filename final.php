<?php 
class Baseclass{
	
	public function f1(){
		return "val1";
	}
	
	
	final public function f2(){
		return "v2";
	}
	
}


class Child extends Baseclass{
	
	public function f2(){
		
		return "vc1";
	}
	
	
}





?>