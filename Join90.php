<?php
class join{
	public $a,$b;
	private static $c;

	function __construct($a=9,$b=3){
		$this->a=$a;
		$this->b=$b;
	}
	function sum(){
		$this->c=$this->a*$this->b;
	}
	function vivod_c(){
		return $this->c;	
	}
	function grin_v() {
		$this->c=$this->c+24;
	}
	function __destruct(){
		echo "Функция сработала";
	}
	    private static function abc() {
        return self::$c;
    }
}
?>