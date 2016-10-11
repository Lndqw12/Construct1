<?php
	require_once "join.php";
	$Dtv=new join (2,3);
		echo $Dtv->a;
		echo $Dtv->b;
	$Dtv->sum();
		echo $Dtv->res;
?>