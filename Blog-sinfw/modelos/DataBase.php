<?php
 //clase que crea la coneccion ala BD
include_once('./config.php'); 

class DataBase 
{
		//coneccion de la base de datos
		public function conectar() {

			
			$coneccion = new PDO(DB_TYPE.":"."host=".DB_HOST.";dbname=".DB_NAME,DB_USER,DB_PASS);
			return $coneccion;
		}

		public function estado_bd()
		{
			if ($coneccion != null)
			{

				return true;

			}
			return false;
		}//true si esta conectado ala database

public function insert($sql)
	{
		$coneccion->prepare($sql);
	}


public function select($class,$atribute,$consult_atribute,$value) //if value is null returns all
{		/*
			$class : the name of the class and the table
			$atribute : the name of the atributes of select
			$consult_atribute : the attribute of the table or class
			$value : the value of the consult

		*/
		$coneccion=$this->conectar();
	if ($atribute=='') {
		
		$atribute='*';
	}
	if($value==null){

		$sql="SELECT $atribute FROM $class";

	}
	else
	{
		$sql="SELECT $atribute FROM $class WHERE $consult_atribute = $value";
	}
		$res=$coneccion->prepare($sql);
		$res->execute();///ejecuto para lrelizar la consulta

	    $resultado = $res->fetchAll();
	    return $resultado;
		}

}//fin clase

 ?>