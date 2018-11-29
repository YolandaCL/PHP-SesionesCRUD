<?php

class Book {

	private $id_libro;
	private $autor;
	private $titulo;
	private $isbn; // son 13 dígitos
	private $editorial;
	private $idioma;
	private $year;
	private $cubierta;
	private $tipo;
	private $paginas;
	private $unidades;
	private $disponibilidad; // S (por defecto) o N
	
	public function __construct($datos = false) {
	/* POO: php no puede tener dos constructores,  entonces se inicializa 
	*  a false $datos de un libro y si los tiene los usa,
	*  sino no los tiene es como si fuera el constructor vacio ; en Java *  sí que puede haber varios constructores
	*/
		if ($datos) {
			$this->id_libro = $datos['id_libro'];
			$this->autor = $datos['autor'];
			$this->titulo = $datos['titulo'];
			$this->isbn = $datos['isbn'];
			$this->editorial = $datos['editorial'];
			$this->idioma = $datos['idioma'];
			$this->year = $datos['year'];
			$this->cubierta = $datos['cubierta'];
			$this->tipo = $datos['tipo'];
			$this->paginas = $datos['paginas'];
			$this->unidades = $datos['unidades'];
			$this->disponibilidad = $datos['disponibilidad'];
		}
	}
	// GETTER
	public function get_id_libro() {
		return $this->id_libro;
	}
	public function get_autor() {
		return $this->autor;
	}
	public function get_titulo() {
		return $this->titulo;
	}
	public function get_isbn() {
		return $this->isbn;
	}
	public function get_editorial() {
		return $this->editorial;
	}
	public function get_idioma() {
		return $this->idioma;
	}
	public function get_year() {
		return $this->year;
	}
	public function get_cubierta() {
		return $this->cubierta;
	}
	public function get_tipo() {
		return $this->tipo;
	}
	public function get_paginas() {
		return $this->paginas;
	}
	public function get_unidades() {
		return $this->unidades;
	}
	public function get_disponibilidad() {
		return $this->disponibilidad;
	}
	// SETTER
	public function set_autor($autor) {
		$this->autor = $autor;
	}
	public function set_titulo($titulo) {
		$this->titulo = $titulo;
	}
	public function set_isbn($isbn) {
		$this->isbn = $isbn;
	}
	public function set_editorial($editorial) {
		$this->editorial = $editorial;
	}
	public function set_idioma($idioma) {
		$this->idioma = $idioma;
	}
	public function set_year($year) {
		$this->year = $year;
	}
	public function set_cubierta($cubierta) {
		$this->cubierta = $cubierta;
	}
	public function set_tipo($tipo) {
		$this->tipo = $tipo;
	}
	public function set_paginas($paginas) {
		$this->paginas = $paginas;
	}
	public function set_unidades($unidades) {
		$this->unidades = $unidades;
	}
	public function set_disponibilidad($disponibilidad) {
		$this->disponibilidad = $disponibilidad;
	}
}