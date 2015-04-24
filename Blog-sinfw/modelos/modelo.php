<?php 
//clase base para los modelo
require('DataBase.php');
abstract class modelo
{
	//private static $bd = new DataBase ();
	//public $class = nombre();
	//$atributos;
		public static function find($id)
		{	
			//get_called_class() obteain the class name where this method is called.
			$bd = new DataBase ();
			$consulta = $bd->select(get_called_class(),'','id',$id);
			$cont=0;
			$arreglo= array();
			foreach ($consulta as $row) {// los exploro
				
				//$arreglo[] = $row[$atributos[$cont]]."<br> ";
				
				}
				
				return $consulta;
			
		}
		//public abstract function nombre();
		//public abstract function clase();

/*public function __construct() {
	
}
public function __construct() {
	
}*/
/*public static function hola()
{
	echo 'holaa';
}*/

}
 ?>