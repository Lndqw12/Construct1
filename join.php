<?php
	class join {
		public $a,$b,$res;
		function __construct($a,$b){
			$this->a=$a;
			$this->b=$b;
	}
		function sum(){
			$this->res=$this->a+$this->b;
	}
}