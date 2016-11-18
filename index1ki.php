<meta charset="utf-8">
<?php
require_once "Join.php";
$Dtv=new Join (3);
echo $Dtv->a;  //  2
echo "<br/>";
echo $Dtv->b;  //  3
echo "<br/>";
$Dtv->sum();

$new_var = $Dtv->vivod_c();
echo $new_var;
echo "<br/>";
$new_var_c = $Dtv->grin_v();
$new_var = $Dtv->vivod_c();
echo $new_var;
echo "<br/>";

//-----------------------------------
echo "----------------------------новый раздел---------------------<br/>";
$new_obj = new Join(7,8);
$new_obj->sum();
echo "<br/>";
echo $new_obj->vivod_c();
$new_obj_2 = $new_obj;
echo "<br/>";
echo "---------------------new-obj 2------------<br/>";
echo $new_obj_2->vivod_c();
echo "----------------------------новый раздел---------------------<br/>";

$obj_v = clone $new_obj;
echo "<br/>";
echo "---------------------obj_v-----------<br/>";
echo $obj_v ->vivod_c();
$obj_v ->grin_v();
echo "<br/>";
echo $obj_v ->vivod_c();
echo "<br/>";
echo "---------------------obj_v-----------<br/>";
echo $new_obj ->vivod_c();
echo "----------------------------STATIC---------------------<br/>";

echo Join::vt();


























?>