<meta charset="utf-8">
<?php
class Join{
	private $a,$b,$res;
	function __construct($a,$b){
		$this->a=$a;
		$this->b=$b;
	}
	function sum(){
		$this->res=$this->a+$this->b;
	}
	
	function vivod_a(){
		return $this->a;
		
	}
	
    function vivod_b(){
		return $this->b;	
	}
	
	
	function vivodsum(){
		return $this->res;
	}
	
	function __destruct(){
		echo "Функция подключена";
	}
}
?>