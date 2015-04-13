<?php 
require("modelo.php");
class user extends modelo
 {
		private $id;
		private $nombre;

		function __construct(){


		}
		function crear($nombre){

			$conn=$this->conectar();
			$sql=$conn->prepare("INSERT user (nombre) values (:nom)");
			$sql->bindParam('nom',$nombre);
			$sql->execute();
			/*$conn2=$this->conectar();
			$sql2 = $conn2->prepare("SELECT id FROM user where nombre = :nom");
			$sql2->bindParam('nom',$nombre);
			$sql2->execute();
			$id = $sql2->fetch();
			echo "<h1>insertado</h1>";*/
				

		}
		public function mostrar_todos()
		{
			$conn=$this->conectar();
			$sql = $conn->prepare('SELECT * FROM user ');//consulta sql
			$sql->execute();///ejecuto para lrelizar la consulta

			    $resultado = $sql->fetchAll();

				return $resultado;
		}


		public function actualizar($nombre)
		{
			$conn->conectar();
			$sql=$conn->preapare("UPDATE user set nombre= :nom  where id = :id");
			$sql->bindParam('id',$this->getId);
			$sql->bindParam('nom',$nombre);


		}
		public function getId()
		{
			return $id;
		}

		public function Eliminar()
		{


		}


		}


 ?>