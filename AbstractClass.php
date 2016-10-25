<?php
abstract class AbstractClass
{
	public $a="2",$b="3";
    abstract protected function getValue();
    abstract protected function prefixValue($prefix);

    public function printOut() {
        print $this->getValue() . "\n";
    }
}
?>