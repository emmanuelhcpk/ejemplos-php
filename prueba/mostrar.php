<?php

$nombre = "root";
$contra="";
//$nom = $_POST['nombre'];
try{
    $conn = new PDO('mysql:host=localhost;dbname=prueba2', $nombre, $contra);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

   $sql = $conn->prepare('SELECT * FROM user ');//consulta sql

   $sql->execute();///ejecuto para lrelizar la consulta

    $resultado = $sql->fetchAll();//retorno



    foreach ($resultado as $row) {// los exploro
		echo $row["nombre"]." ";
		        echo $row["id"];
		        
		         echo "<br>";

    }
//INSERT INTO `prueba2`.`user` (`nombre`, `apellido`, `años`) VALUES ('easd', 'dadsd', '4254')
}catch(PDOException $e){

    echo "ERROR: " . $e->getMessage();

}

?>
