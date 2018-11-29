<?php
require 'core/init.php';

$user = new User($_POST);
insert_usuario($conexion, $user);


header('location:soyEmpleado_Usuarios.php');

?>