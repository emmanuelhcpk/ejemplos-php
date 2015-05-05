<?php 
require_once('modelos/modelo.php');
class Usuarios extends modelo
{
	public $nombre='';
	public $id;
	public $email;
	public $password;
	//public static $attrs = ["nombre","id","email"];


public function construir($em,$nom,$pass) {
	$this->nombre = $nom;
	$this->email = $em;
	$this->password = $pass;
}
function __construct() {
	
}
}
?>
