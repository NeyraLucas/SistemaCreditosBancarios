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
	public function insertar($nom_usu,$ape_p_usu,$ape_m_usu,$direccion_usu,$email_usu,$cargo_usu,$login_usu,$clave_usu)
	{
		$sql="INSERT INTO usuario (nom_usu,ape_p_usu,ape_m_usu, direccion_usu, email_usu, cargo_usu, login_usu,clave_usu,condicion)
		VALUES ('$nom_usu','$ape_p_usu','$ape_m_usu', '$direccion_usu', '$email_usu', '$cargo_usu', '$login_usu','$clave_usu','1')";
		return ejecutarConsulta($sql);
	}

	//Función para verificar el acceso al sistema
	public function verificar($login,$clave)
    {
    	$sql="SELECT id_usuario,nom_usu,login_usu FROM usuario WHERE login_usu='$login' AND clave_usu='$clave'"; 
    	return ejecutarConsulta($sql);  
    }
}

?>