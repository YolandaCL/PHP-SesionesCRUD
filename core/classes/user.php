<?php

class User {

	private $id_usuario;
	private $nombre_usuario;
	private $clave;
	private $nombre;
	private $ape1;
	private $ape2;
	private $email;
	private $calle;
	private $localidad;
	private $codigo_postal;
	private $pais;
	private $perfil; // (empleado, cliente, suscriptor, colegio, proveedor)
	

	public function __construct($datos = false) {
	/* POO: php no puede tener dos constructores,  entonces se inicializa 
	*  a false $datos de un libro y si los tiene los usa,
	*  sino no los tiene es como si fuera el constructor vacio ; en Java *  sí que puede haber varios constructores
	*/
		if ($datos) {
			$this->id_usuario = $datos['id_usuario'];
			$this->nombre_usuario = $datos['nombre_usuario'];
			$this->clave = $datos['clave'];
			$this->nombre = $datos['nombre'];
			$this->ape1 = $datos['ape1'];
			$this->ape2 = $datos['ape2'];
			$this->email = $datos['email'];
			$this->calle = $datos['calle'];
			$this->localidad = $datos['localidad'];
			$this->codigo_postal = $datos['codigo_postal'];
			$this->pais = $datos['pais'];
			$this->perfil = $datos['perfil'];
		}
	}
	// GETTER
	public function get_id_usuario() {
		return $this->id_usuario;
	}
	public function get_nombre_usuario() {
		return $this->nombre_usuario;
	}
	public function get_clave() {
		return $this->clave;
	}
	public function get_nombre() {
		return $this->nombre;
	}
	public function get_ape1() {
		return $this->ape1;
	}
	public function get_ape2() {
		return $this->ape2;
	}
	public function get_email() {
		return $this->email;
	}
	public function get_calle() {
		return $this->calle;
	}
	public function get_localidad() {
		return $this->localidad;
	}
	public function get_codigo_postal() {
		return $this->codigo_postal;
	}
	public function get_pais() {
		return $this->pais;
	}
	public function get_perfil() {
		return $this->perfil;
	}
	
	// SETTER
	public function set_nombre_usuario($nombre_usuario) {
		$this->nombre_usuario = $nombre_usuario;
	}
	public function set_clave($clave) {
		$this->clave = $set_clave;
	}
	public function set_nombre($nombre) {
		$this->nombre = $nombre;
	}
	public function set_ape1($ape1) {
		$this->ape1 = $ape1;
	}
	public function set_ape2($ape2) {
		$this->ape2 = $ape2;
	}
	public function set_email($email) {
		$this->email = $email;
	}
	public function set_calle($calle) {
		$this->calle = $calle;
	}
	public function set_localidad($localidad) {
		$this->localidad = $localidad;
	}
	public function set_codigo_postal($codigo_postal) {
		$this->codigo_postal = $codigo_postal;
	}
	public function set_pais($pais) {
		$this->pais = $pais;
	}
	public function set_perfil($perfil) {
		$this->perfil = $perfil;
	}
}