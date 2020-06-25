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
	public function insertar($tipo_persona,$nom_clie,$tipo_documento,$num_documento,$edad,$direccion_clie,$email_clie,$telefono)
	{
		$sql="INSERT INTO cliente (tipo_persona,nom_clie,tipo_documento, num_documento, edad, direccion_clie, email_clie,telefono,condicion)
		VALUES ('$tipo_persona','$nom_clie','$tipo_documento', '$num_documento', '$edad', '$direccion_clie', '$email_clie','$telefono','1')";
		return ejecutarConsulta($sql);
	}

}

?>