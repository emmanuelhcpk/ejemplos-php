<?
php 

class Persistencia

{

 private $persistencia;
 private $nombre = "root";
 private $contra="";
 public $hola=1;

	public function all()
	{
		
		$conn = new PDO('mysql:host=localhost;dbname=prueba2', $nombre, $contra);

//	    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	   $sql = $conn->prepare('SELECT * FROM user ');//consulta sql

	   $sql->execute();///ejecuto para lrelizar la consulta

	    $resultado = $sql->fetchAll();

		return $resultado;
	}

}
