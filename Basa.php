<?php
class gtr {
public $a,$b,$c;
	function __construct($a,$b) {
	 $this->a=$a;
	 $this->b=$b;
}
	function sum(){
	 $this->c=$this->a+$this->b;
}
};
?>