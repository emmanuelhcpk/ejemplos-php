<?php 
class modelo
{

function conectar() {

$con= new PDO("mysql:hostname=localhost;dbname=prueba2","root","");

       return $con;
   }




}


 ?>