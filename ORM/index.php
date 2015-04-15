<?php 

$db = DatabaseLayer:getConnection("MySqlProvider");
$resultados = $db->execute('SELECT * FROM users WHERE name LIKE ?', null, array('Antonio'));
// Tendríamos una matriz con todos los datos de los usuarios cuyo nombre fuera como Antonio

$resultado =  $db->executeScalar('SELECT COUNT(id) FROM users WHERE name LIKE ?', null, array('Antonio'));

 ?>