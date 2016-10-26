<?php
require_once "AbstractClass.php";
require_once "ConcreteClass1.php";
require_once "ConcreteClass2.php";

abstract class AbstractClass
{
    abstract protected function getValue();
    abstract protected function prefixValue($prefix);
    abstract public function f1();
    public function printOut() {
        print $this->getValue() . "\n";
    }
    public  function sum(){
        $n = $this->f1();
        $sum = $n*$n;
        echo $sum;
    }
}
?>