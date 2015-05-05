<?php
//include('modelos/Factory.php');
require_once('modelos/models/Usuarios.php');
require_once('modelos/models/Post.php');
//include('config.php'); 
//echo DB_TYPE.':'.'host='.DB_HOST.';dbname='.DB_NAME."<br> ";
$u = Usuarios::find(2);
echo $u->nombresito();
//$u->Saludar();
///$echo ($u->hola);
//$hola= 1;
//$noc=2;
//$cosas=3;
//$a=[110,4];
//echo $a[0]."<br> ";

//print_r(array_keys(get_defined_vars()))."<br> ";
//print_r
//$user=Usuarios::find(1);
//$user->destroy();
//var_dump($user);
//$user = new Usuarios("email@hotmail.com","emmita","123456789");
//$user->id= 1;
//$user->update();
//$user
//$user->save();
//$aux=get_object_vars(Usuarios::find(2)); 
			//$aux = array_keys($aux);
//var_dump($user);
//$user->save();
//var_dump($f->crear("Usuarios"));
//include_once('modelos/files.php');
//var_dump(Post::find(1));

 ?>