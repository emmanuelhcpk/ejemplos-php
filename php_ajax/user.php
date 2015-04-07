<?php 
require("modelo.php");
class user extends modelo
{

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