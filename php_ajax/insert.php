<?php 
/*$nombre=$_POST['nombre'];
$con= new PDO('mysql:hostname=localhost;dbname=prueba2',"root","");
$sql=$con->prepare("INSERT user (nombre) values (:nom)");
$sql->bindParam('nom',$nombre);
$sql->execute();
echo "insertado";*/
$conn = new PDO('mysql:host=localhost;dbname=prueba2', "root", "");

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

   $sql = $conn->prepare('SELECT * FROM user ');//consulta sql

   $sql->execute();///ejecuto para lrelizar la consulta

    $resultado = $sql->fetchAll();//retorno



    foreach ($resultado as $row) {// los exploro
		echo $row["nombre"]." ";
		        echo $row["id"];
		        
		         echo "<br>";}



 ?>