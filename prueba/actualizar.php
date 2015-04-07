<?php 
$nombre= "root";
$contra= "";
$id =$_POST['id'];
$nomb= $_POST['nombre'];
try{
	$con= new PDO('mysql:host=localhost;dbname=prueba2',$nombre,$contra);
	$consulta= "UPDATE user set nombre = :nom where id = :id ";
	$sql= $con->prepare($consulta);
	$sql->bindParam(':nom',$nomb);
	$sql->bindParam(':id',$id);
	$sql->execute();
	header('Location: index.php');
}
catch(PDOException $e){
    echo "ERROR: " . $e->getMessage();
}









 ?>