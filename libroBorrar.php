<?php
require 'core/init.php';

$id_libro = $_GET['id_libro'];

delete_book($conexion, $id_libro);

header('location:soyEmpleado_Catalogo.php');

?>
