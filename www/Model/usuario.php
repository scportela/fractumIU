<?php

class usuario {

	protected $dniUsu;
	private $nomUsu;
	private $apellUsu;
	private $passUsu;
	private $tipoUsu;

	/**
	*	Constructor de usuarios.
	*/

	function __construct($dniUsu, $nomUsu, $apellUsu, $passUsu, $tipoUsu){
		$this->dniUsu   = $dniUsu;
		$this->nomUsu   = $nomUsu;
		$this->apellUsu = $apellUsu;
		$this->passUsu  = $passUsu;
		$this->tipoUsu  = $tipoUsu;
	}

	/**
	 * Inicio de las funciones SQL
	 */

	protected function consultarUsuarioSql(){
		$consultarUsuario  = "SELECT * FROM USUARIO WHERE dniUsu = '$this->dniUsu'";
		$resultado = mysql_query($consultarUsuario) or die(mysql_error());
		return $resultado;
	}

	protected function insertarUsuarioSql(){
		$insertarUsuario  = "INSERT INTO USUARIO(dniUsu, nomUsu, apellUsu, passUsu, tipoUsu) VALUES ('$this->dniUsu', '$this->nomUsu','$this->apellUsu','$this->passUsu','$this->tipoUsu')";
		$resultado = mysql_query($insertarUsuario) or die(mysql_error());
		return $resultado;
	}

	protected function eliminarUsuarioSql(){
		$eliminarUsuario = "DELETE FROM USUARIO WHERE dniUsu = '$this->$dniUsu'";
		$resultado = mysql_query($eliminarUsuario) or die(mysql_error());
		return $resultado;
	}

	protected function actualizarUsuarioSql(){
		$actualizarUsuario = "UPDATE USUARIO SET nomUsu ='$this->nomUsu', apellUsu='$this->apellUsu', passUsu='$this->passUsu' where dniUsu='$this->dniUsu'";
		$resultado = mysql_query($actualizarUsuario) or die(mysql_error());
		return $resultado;
	}
	/**
	 * Fin de las funciones SQL
	 */

	public function login(){
		$sql = "SELECT tipoUsu FROM USUARIO WHERE dniUsu = '$this->dniUsu' and passUsu = '$this->passUsu'";
		$result = mysql_query($sql) or die(mysql_error());
		if (mysql_num_rows($result) == 0){
			return false;
		} else {
			session_start();
			$_SESSION["dni"]  = $this->dniUsu;
			$_SESSION["tipo"] = $this->tipoUsu;
			return $result;
		}
	}

	public function getTipoUsu(){
		return $this->tipoUsu;
	}

	public function altaUsuario(){
		$resultado = $this->consultarUsuarioSql();
		if ($resultado) {
			$resultado1 = $this->insertarUsuarioSql();
			return true;
		} else {
			return false;
		}
	}

	
	public function bajaUsuario(){
		$resultado = $this->consultarUsuarioSql();
		if ($resultado) {
			$resultado1 = $this->eliminarUsuarioSql();
			return true;
		} else {
			return false;
		}
	}

	public function modificarUsuario(){
		$resultado = $this->consultarUsuarioSql();
		if ($resultado) {
			$resultado1 = $this->actualizarUsuarioSql();
			return true;
		} else {
			return false;
		}
	}

	public function consultarUsuario(){
		$resultado = mysql_query($consultarUsuario) or die(mysql_error());
		if ($resultado) {
			return $resultado;
		} else {
			return false;
		}
	}

}

?>