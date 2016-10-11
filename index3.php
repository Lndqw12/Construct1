<?php
	require_once "join1.php";
	$Dtv=new Join (2,3);
		echo $Dtv->vivod_a();
		echo "<br/>";
		echo $Dtv->vivod_b();
		echo "<br/>";
	$Dtv->sum();
		echo $Dtv->vivodsum();
		echo "<br/>";
?>