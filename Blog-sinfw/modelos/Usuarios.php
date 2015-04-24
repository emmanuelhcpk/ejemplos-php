<?php 
require_once('modelo.php');
class Usuarios extends modelo
{
	public $nombre='';
	public $id;
	public $email;
	public $password;
	//public static $attrs = ["nombre","id","email"];


function __construct($i,$em,$nom,$pass) {
	$this->nombre = $nom;
	$this->id = $i;
	$this->email = $em;
	$this->password = $pass;
}


	public static function find($id)
	{
		$aux = parent::find($id);
		$a= $aux[0];
		$usuario = new Usuarios($a[0],$a[1],$a[2],$a[3]);
		return $usuario;
	}

}
?>