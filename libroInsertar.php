<?php
require 'core/init.php';

$book = new Book($_POST);
insert_book($conexion, $book);

/*
SIN POO SERÍA:
$id_libro = $_POST['id_libro'];
$bookAutor = $_POST['autor'];
$bookTitulo = $_POST['titulo'];
....
insert_book($conexion, $id_libro,$bookAutor, $bookTitulo,...);
*/

header('location:soyEmpleado_Catalogo.php');

?>