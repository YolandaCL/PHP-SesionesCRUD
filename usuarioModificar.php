<?php
require 'core/init.php';

$user = new User($_POST);
update_user($conexion, $user);

header('location:gestionarCatalogo.php');

?>