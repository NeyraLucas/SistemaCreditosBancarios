<?php 
//Incluímos inicialmente la conexión a la base de datos
require "../config/conexion.php";

Class Usuario
{
	//Implementamos nuestro constructor
	public function __construct()
	{

	}

	//funcion para insertar
	public function insertar($id_medio,$id_cliente,$id_tipo_credito,$fecha_solicitud,$valor_solicitado,$plazo,$interes,$periodicidad,$id_usuario)
	{
		$sql="INSERT INTO solicitud_credito (id_medio,id_cliente,id_tipo_credito, fecha_solicitud, valor_solicitado, plazo, interes,periodicidad,id_usuario,condicion)
		VALUES ('$id_medio','$id_cliente','$id_tipo_credito', '$fecha_solicitud', '$valor_solicitado', '$plazo', '$interes','$periodicidad','$id_usuario','1')";
		return ejecutarConsulta($sql);
	}

}

?>