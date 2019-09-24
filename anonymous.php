<?php 
$var1 = new class{
	
	public $v1 = "value1";
	public  $v2 = 2;
	
	
	public function getValue(){
		return "getting value";
	}
	
	
	public function getValueArgument($arg){
		return $this->v2."--".$arg;
	}
	
};

var_dump($var1);
echo "\n";
echo $var1->v1;
echo "\n";
echo $var1->v2;
echo "\n";
echo $var1->getValue();
echo "\n";
echo $var1->getValueArgument("newArgument");



$ano_class_obj_with_func = ano_class_obj_with_func();

ano_class_obj_with_func(){
	 
	 return new class {
        public $prop1 = 'hello';
        public $prop2 = 754;
        const SETT = 'some config';

        public function getValue()
        {
            // do some operation
            return 'some returned value';
        }

        public function getValueWithArgu($str)
        {
            // do some operation
            return 'returned value is '.$str;
        }
    };
		
		
}

echo "\n";

var_dump($ano_class_obj_with_func);
echo "\n";

echo $ano_class_obj_with_func->prop1;
echo "\n";

echo $ano_class_obj_with_func->prop2;
echo "\n";

echo $ano_class_obj_with_func::SETT;
echo "\n";

echo $ano_class_obj_with_func->getValue();
echo "\n";

echo $ano_class_obj_with_func->getValueWithArgu('OOP');
echo "\n";

echo "\n";

?>