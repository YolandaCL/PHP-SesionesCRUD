<?php

class Order {
	private $id_pedido; // es el id_libros de tabla libros
	private $cantidad; // cantidad de id_pedido >0
	private $lote;	// aaaammdd_nºlote
	private $nombre; // comprador
	private $ape1;
	private $ape2;
	private $email;
	private $envio;	// [N(por defecto) o S ]  
	private $calle;
	private $localidad;
	private $codigo_postal;
	private $pais;

	public function __construct($datos = false) {
		if ($datos) {
			$this->id_pedido = $datos['id_pedido'];
			$this->cantidad = $datos['cantidad'];
			$this->lote = $datos['lote'];
			$this->nombre = $datos['nombre'];
			$this->ape1 = $datos['ape1'];
			$this->ape2 = $datos['ape2'];
			$this->email = $datos['email'];
			$this->envio = $datos['envio'];
			$this->calle = $datos['calle'];
			$this->localidad = $datos['localidad'];
			$this->codigo_postal = $datos['codigo_postal'];
			$this->pais = $datos['pais'];
		}
	}
	// GETTER
	public function get_id_pedido() {
		return $this->id_pedido;
	}
	public function get_cantidad() {
		return $this->cantidad;
	}
	public function get_lote() {
		return $this->lote;
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
	public function get_envio() {
		return $this->envio;
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
	
	// SETTER
	public function set_id_pedido($id_pedido) {
		$this->id_pedido = $id_pedido;
	}
	public function set_cantidad($cantidad) {
		$this->cantidad = $cantidad;
	}
	public function set_lote($lote) {
		$this->lote = $lote;
	}
	public function set_nombre($nombre) {
		$this->nombre = $nombre;
	}
	public function set_ape1($ape1) {
		$this->ape1= $ape1;
	}
	public function set_ape2($ape2) {
		$this->ape2 = $ape2;
	}
	public function set_email($email) {
		$this->email = $email;
	}
	public function set_envio($envio) {
		$this->envio = $envio;
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
	
}