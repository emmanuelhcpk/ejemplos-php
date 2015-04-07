<?php

$nombre = "root";
$contra="";
$nom = $_POST['nombre'];
echo $nom;
try{
    $conn = new PDO('mysql:host=localhost;dbname=prueba2', $nombre, $contra);

  //$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  //$sql = $conn->prepare('SELECT * FROM user WHERE id = :Id');//consulta sql

  // $sql->execute(array('Id' => 7));///ejecuto para lrelizar la consulta

 //$resultado = $sql->fetchAll();//retorno

 //$sql->execute(array('nombre'=>$nombre));
$sql = $conn->prepare("INSERT INTO user (nombre) VALUES (:nom)");//consulta sql
$sql->bindParam(':nom', $nom);
$sql->execute();//"INSERT INTO REGISTRY (name, value) VALUES (:name, :value)"

//$sql->execute(array('nom' => $nom ));

    /*foreach ($resultado as $row) {// los exploro

        echo $row["id"];
        echo $row["nombre"];

    }*/
//INSERT INTO `prueba2`.`user` (`nombre`, `apellido`, `años`) VALUES ('easd', 'dadsd', '4254')
}catch(PDOException $e){
    echo "ERROR: " . $e->getMessage();
}

?>
