
<html>
<head>
	<title>usuarios</title>
</head>
<body>
<?php 

include "user.php";
$a = new user();

$resultado = $a->mostrar_todos();

?>
<h1>usuarios</h1>
<h3><?php 
foreach ($resultado as $row) {// los exploro
		echo $row["nombre"]." ";
		echo $row["id"];
		echo "<br>";

 }
 ?>
</h3>

</body>
</html>

