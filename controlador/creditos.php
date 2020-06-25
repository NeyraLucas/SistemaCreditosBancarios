<?php

require_once "../modelo/Credito.php";

$usuario=new Usuario();

$id_solicitud_credito=isset($_POST["id_solicitud_credito"])? limpiarCadena($_POST["id_solicitud_credito"]):"";
$id_medio=isset($_POST["id_medio"])? limpiarCadena($_POST["id_medio"]):"";
$id_cliente=isset($_POST["id_cliente"])? limpiarCadena($_POST["id_cliente"]):"";
$id_tipo_credito=isset($_POST["id_tipo_credito"])? limpiarCadena($_POST["id_tipo_credito"]):"";
$fecha_solicitud=isset($_POST["fecha_solicitud"])? limpiarCadena($_POST["fecha_solicitud"]):"";
$valor_solicitado=isset($_POST["valor_solicitado"])? limpiarCadena($_POST["valor_solicitado"]):"";
$plazo=isset($_POST["plazo"])? limpiarCadena($_POST["plazo"]):"";
$interes=isset($_POST["interes"])? limpiarCadena($_POST["interes"]):"";
$periodicidad=isset($_POST["periodicidad"])? limpiarCadena($_POST["periodicidad"]):"";
$id_usuario=isset($_POST["id_usuario"])? limpiarCadena($_POST["id_usuario"]):"";
//$condicion=isset($_POST["condicion"])? limpiarCadena($_POST["condicion"]):"";



switch($_GET["op"]){

	case 'guardaryeditar':

		if (empty($id_solicitud_credito)){
			$rspta=$usuario->insertar($id_medio,$id_cliente,$id_tipo_credito,$fecha_solicitud,$valor_solicitado,$plazo,$interes,$periodicidad,$id_usuario);
			echo $rspta ? "Usuario registrado" : "No se pudieron registrar todos los datos del usuario";
			echo $usuario;
		}
		/*else {
			$rspta=$usuario->editar($id_solicitud_credito,$id_cliente,$id_tipo_credito,$fecha_solicitud,$plazo,$periodicidad,$interes,$periodicidad,$condicion,$clavehash,$imagen,$_POST['permiso']);
			echo $rspta ? "Usuario actualizado" : "Usuario no se pudo actualizar";
		}*/
		break;	


}

?>