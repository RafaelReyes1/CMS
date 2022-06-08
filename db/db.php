<?php

require_once "config.php";

class baseDatos{
	private $conexion; 
	private $db; 

	
	public static function conectar()
	{
	
	$conexion = mysqli_connect(host,user,pass,dbname,port); 

		
		
		if($conexion->connect_errno)
			die("Lo sentimos, no se ha podido conectar con MySQL: " .mysqli_error());
		else
		{
			$db = mysqli_select_db($conexion, dbname);
			if($db == 0)
				die("Lo sentimos, no se ha podido conectar con la base de datos: ".dbname);
		}
		
		return $conexion;
	}

	public function desconectar()
	{
		if($conexion)
			mysqli_close($conexion);
	}

}
?>
