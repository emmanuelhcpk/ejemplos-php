<?php 
try{
$nombre=$_POST['nombre'];
$con= new PDO('mysql:hostname=localhost;dbname=prueba2',"root","");
$sql=$con->prepare("INSERT user (nombre) values (:nom)");
$sql->bindParam('nom',$nombre);
$sql->execute();
echo "insertado";
}
catch(PDOException $e)
{
echo $e->getMessage();

}
 ?>