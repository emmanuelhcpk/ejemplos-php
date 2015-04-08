<?php 
require("modelo.php");
class user extends modelo
{
function __construct($nombre){

$conn=$this->conectar();
$sql=$conn->prepare("INSERT user (nombre) values (:nom)");
$sql->bindParam('nom',$nombre);
$sql->execute();
echo "<h1>insertado</h1>";
	

}
public function mostrar_todos()
{
	$conn=$this->conectar();
	$sql = $conn->prepare('SELECT * FROM user ');//consulta sql
	$sql->execute();///ejecuto para lrelizar la consulta

	    $resultado = $sql->fetchAll();

		return $resultado;
}


}


 ?>