<?php
include 'bdController.php';

include '../Model/usuario.php';
include '../Model/externo.php';
include '../Model/interno.php';


$action =$_REQUEST['accion'];

switch ($action) {
	case 'login':
		loginUsuario();
	break;
	case 'altaInterno':
		nuevoUsuarioInterno();
		break;
	case 'altaExterno':
		nuevoUsuarioExterno();
		break;
	case 'modificar':
		# code...
		break;
	case 'consultar':
		# code...
		break;
	case 'alta':
		# code...
		break;
	case 'alta':
		# code...
		break;
	case 'alta':
		# code...
		break;
	
	default:
		# code...
		break;
}
	function loginUsuario(){
		$dniUsu = $_POST["dniUsu"];
		$passUsu = $_POST["passUsu"];
		
		$usuario   = new usuario($dniUsu, "", "", $passUsu, "" );
		$recurso	=	$usuario->login();
		
		# This is how to use the "Recurso"
		if($recurso != FALSE )
		{
				# Create a temporal array to save the data, fetch array moves the pointer
				$tipoUsuario=array();
				
				while ($row = mysql_fetch_array($recurso)){
						array_push($tipoUsuario,$row[0]);
				}
				 
				switch ($tipoUsuario[0]){
						case 'J':
						header("location:../View/usuarios/jefe/homeJefe.php");
						break;
						case 'I':
						header("location:../View/usuarios/interno/homeInterno.php");
						break;
						case 'E':
						header("location:../View/usuarios/externo/homeExterno.php");
						break;
				}
		}else{
		# Implementar mensaje de error
		require_once "../View/Login.php";
		}
	}

	function nuevoUsuarioInterno(){
		$dniUsu    = $_REQUEST['dni'];
		$nombre    = $_REQUEST['nombre'];
		$apellidos = $_REQUEST['apellidos'];
		$telefono  = $_REQUEST['tlf'];
		$email     = $_REQUEST['correo'];
		
		$usuario   = new usuario($dniUsu, $nombre, $apellidos, $dniUsu, 'I' );
		$intero = $usuario;
		$usuario->altaUsuario();
		$interno->setTelefOpeInt($telefono);
		$interno->setMailOpeInt($mail);
		$interno->altaUsuario();
	}

	function nuevoUsuarioExterno(){
		$dniUsu    = $_REQUEST['dni'];
		$nombre    = $_REQUEST['nombre'];
		$apellidos = $_REQUEST['apellidos'];
		$cifEmpr   = $_REQUEST['cif'];
		

		$usuario = new usuario($dniUsu, $nombre, $apellidos, $dniUsu, 'E' );
		$externo = new externo($dniUsu, $nombre, $apellidos, $dniUsu, 'E' );
		$usuario->altaUsuario();
		$externo->setCifEmpr($cifEmpr);
		$externo->altaUsuario();
	}






?>