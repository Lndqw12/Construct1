<?php
interface Basainter
{
    public function summa($one,$two);
    public function show();
}
class Tools implements Basainter
{
    public $res;
    public function summa($one,$two)
{
        $this->res = $one+$two;
		$this->res = $one*$two;
}
    public function show()
{
    return $this->res;
}
	function rrt($rrt){
		  $this->rrt = $one+$two;
	}
}
echo $rrt;
?>