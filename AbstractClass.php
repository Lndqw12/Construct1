﻿<?php
abstract class AbstractClass
{
    abstract protected function getValue();
    abstract protected function prefixValue($prefix);

    public function printOut() {
        print $this->getValue() . "\n";
    }
	    public  function summa(){
        $c = $this->f1();
        $summa = $c*$c;
        echo $sum;
    }
}
?>