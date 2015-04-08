<?php 
try{
	include ("user.php");

$nombre=$_POST['nombre'];
$user= new user($nombre);
/*$con = new PDO("mysql:host=localhost;dbname=prueba2","root","");

$sql=$con->prepare("INSERT user (nombre) values (:nom)");
$sql->bindParam('nom',$nombre);
$sql->execute();
echo "insertado";*/

}
catch(PDOException $e)
{
echo $e->getMessage();

}
 ?>