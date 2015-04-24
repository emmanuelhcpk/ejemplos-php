<?php
//include('modelos/modelo.php');
include('modelos/Usuarios.php');
//include('config.php'); 
echo DB_TYPE.':'.'host='.DB_HOST.';dbname='.DB_NAME."<br> ";
//$u = Usuarios::find(1);
//echo $u->nombre;
//$hola= 1;
//$noc=2;
//$cosas=3;
//$a=[110,4];
//echo $a[0]."<br> ";

//print_r(array_keys(get_defined_vars()))."<br> ";
//print_r
print_r(Usuarios::find(1));
 ?>