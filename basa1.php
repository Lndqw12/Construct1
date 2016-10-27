<?php
require_once "interface1.php";
class Tools implements Basainter
{
    public $res,$res1,$res2;
    public function summa($one,$two,$three,$four,$five,$six)
{
        $this->res = $one/$two;
		$this->res1 = $three*$four;
		$this->res2 = $three-$four;
}
    public function show()
{
   echo $this->res;
   echo "<br/>";
   echo $this->res1;
   echo "<br/>";
   echo $this->res2;
}
	//public $rrt
//	public function suma($on,$tw)
	//{
		//$this->ress = $on+$tw;
//	}
	//public function root()
	//{
	//return $this->ress;
	//} ------нерабочая функция------
}
?>