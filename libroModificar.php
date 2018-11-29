<?php
require 'core/init.php';

$book = new Book($_POST);
update_book($conexion, $book);

/*
$id_libro = $_POST['id_libro'];
$bookAutor = $_POST['autor'];
$bookTitulo = $_POST['titulo'];

update_book($conexion, $id_libro,$bookAutor, $bookTitulo);
*/

header('location:soyEmpleado_Catalogo.php');

?>