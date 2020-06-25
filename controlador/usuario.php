<?php

require_once "../modelo/Usuario.php";

$usuario=new Usuario();

$idusuario=isset($_POST["id_usuario"])? limpiarCadena($_POST["id_usuario"]):"";
$nombre=isset($_POST["nom_usu"])? limpiarCadena($_POST["nom_usu"]):"";
$apellido_p_usu=isset($_POST["ape_p_usu"])? limpiarCadena($_POST["ape_p_usu"]):"";
$apellido_m_usu=isset($_POST["ape_m_usu"])? limpiarCadena($_POST["ape_m_usu"]):"";
$direccion=isset($_POST["direccion_usu"])? limpiarCadena($_POST["direccion_usu"]):"";
$email=isset($_POST["email_usu"])? limpiarCadena($_POST["email_usu"]):"";
$cargo=isset($_POST["cargo_usu"])? limpiarCadena($_POST["cargo_usu"]):"";
$login=isset($_POST["login_usu"])? limpiarCadena($_POST["login_usu"]):"";
$clave=isset($_POST["clave_usu"])? limpiarCadena($_POST["clave_usu"]):"";


switch($_GET["op"]){

	case 'guardaryeditar':

		if (empty($idusuario)){
			$rspta=$usuario->insertar($nombre,$apellido_p_usu,$apellido_m_usu,$direccion,$email,$cargo,$login,$clave);
			echo $rspta ? "Usuario registrado" : "No se pudieron registrar todos los datos del usuario";
			echo $_POST['login_usu'];
		}
		/*else {
			$rspta=$usuario->editar($idusuario,$nombre,$tipo_documento,$num_documento,$direccion,$telefono,$email,$cargo,$login,$clavehash,$imagen,$_POST['permiso']);
			echo $rspta ? "Usuario actualizado" : "Usuario no se pudo actualizar";
		}*/
		break;	


    case 'verificar':
		$logina=$_POST['logina'];
	    $clavea=$_POST['clavea'];

	    //Hash SHA256 en la contraseña
		//$clavehash=hash("SHA256",$clavea);

		$rspta=$usuario->verificar($logina, $clavea);
		//$rspta=$usuario->verificar($logina, $clavehash);

		$fetch=$rspta->fetch_object();

		if (isset($fetch))
	    {
	        //Declaramos las variables de sesión
	        $_SESSION['idusuario']=$fetch->idusuario;
	        $_SESSION['nombre']=$fetch->nombre;
			$_SESSION['login']=$fetch->login;
			//echo json_encode($fetch);
	    }
			//echo json_encode("incorrecto");
		echo json_encode($fetch);
		
	break;

	case 'salir':
		//Limpiamos las variables de sesión   
        session_unset();
        //Destruìmos la sesión
        session_destroy();
        //Redireccionamos al login
        header("Location: ../index.html");

	break;
}

?>