<?php

include_once('usuario.php');

class externo extends usuario {

	private $cifEmpr;

	/**
	 * Sin constructor dado que hereda de usuario.
	 */

	public function setCifEmpr($cif){
		$this->cifEmpr = $cif;
	}

	/**
	 * Funciones SQL difirenciadas en cada clase.
	 */

	protected function consultarUsuarioSql(){
		$consultarUsuario  = "SELECT * FROM OPEXTERNO WHERE dniUsu = '$this->dniUsu'";
		$resultado = mysql_query($consultarUsuario) or die(mysql_error());
		return $resultado;
	}

	protected function insertarUsuarioSql(){
		$insertarUsuario  = "INSERT INTO OPEXTERNO(dniUsu, cifEmpr) VALUES ('$this->dniUsu','$this->cifEmpr')";
		$resultado = mysql_query($insertarUsuario) or die(mysql_error());
		return $resultado;
	}

	protected function eliminarUsuarioSql(){
		$eliminarUsuario = "DELETE FROM OPEXTERNO WHERE dniUsu = '$this->$dniUsu'";
		$resultado = mysql_query($eliminarUsuario) or die(mysql_error());
		return $resultado;
	}

	protected function actualizarUsuarioSql(){
		$actualizarUsuario = "UPDATE OPEXTERNO SET cifEmpr='$this->cifEmpr' where dniUsu= '$this->dniUsu'";
		$resultado = mysql_query($actualizarUsuario) or die(mysql_error());
		return $resultado;
	}
	
}
?>