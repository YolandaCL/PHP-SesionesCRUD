<?php 
require 'core/init.php';

if(empty($_POST) === false) {
	$nombre = $_POST['nombre'];
	$clave = $_POST['clave'];

	if(empty($nombre) === true || empty($clave) === true) {
		$errors[] = 'Debes escribir nombre y clave';
 // Validar usuario y la clave
	} else {
		$usuario = get_user_by_login($conexion, $nombre, $clave);
		if ($usuario == null) {
			$errors[] = 'No aparece ese nombre-clave, ¿está registrado?';
		}
    	else {
        	// Anotar en $_SESSION que el usuario esta logueado
        	$_SESSION['usuario'] = $usuario;
        	// Redirige a la index.php:
        	header('location: index.php');
    	}
    }
}
?>