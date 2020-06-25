<?php

require_once "../modelo/Clientes.php";

$usuario=new Usuario();

$idusuario=isset($_POST["id_cliente"])? limpiarCadena($_POST["id_cliente"]):"";
$tipo_persona=isset($_POST["tipo_persona"])? limpiarCadena($_POST["tipo_persona"]):"";
$nombre=isset($_POST["nom_clie"])? limpiarCadena($_POST["nom_clie"]):"";
$tipo_documento=isset($_POST["tipo_documento"])? limpiarCadena($_POST["tipo_documento"]):"";
$num_documento=isset($_POST["num_documento"])? limpiarCadena($_POST["num_documento"]):"";
$edad=isset($_POST["edad"])? limpiarCadena($_POST["edad"]):"";
$direccion_clie=isset($_POST["direccion_clie"])? limpiarCadena($_POST["direccion_clie"]):"";
$email_clie=isset($_POST["email_clie"])? limpiarCadena($_POST["email_clie"]):"";
$telefono=isset($_POST["telefono"])? limpiarCadena($_POST["telefono"]):"";
$condicion=isset($_POST["login_usu"])? limpiarCadena($_POST["login_usu"]):"";



switch($_GET["op"]){

	case 'guardaryeditar':

		if (empty($idusuario)){
			$rspta=$usuario->insertar($tipo_persona,$nombre,$tipo_documento,$num_documento,$edad,$direccion_clie,$email_clie,$telefono);
			echo $rspta ? "Usuario registrado" : "No se pudieron registrar todos los datos del usuario";
			echo $_POST['login_usu'];
		}
		/*else {
			$rspta=$usuario->editar($idusuario,$nombre,$tipo_documento,$num_documento,$direccion_clie,$telefono,$email_clie,$telefono,$condicion,$clavehash,$imagen,$_POST['permiso']);
			echo $rspta ? "Usuario actualizado" : "Usuario no se pudo actualizar";
		}*/
		break;	


}

?>