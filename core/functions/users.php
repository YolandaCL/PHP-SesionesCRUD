<?php 

function get_user_by_login($conexion, $name, $password) {

    $name = $conexion->real_escape_string($name);
    $password = $conexion->real_escape_string($password);
    $result = $conexion->query("SELECT * FROM usuarios WHERE nombre_usuario = '$name' AND clave = '$password'");

    $user = $result->fetch_object();
    $result->free();

    return $user;
}
function check_rol($perfil) {
    if (isset($_SESSION['usuario'])) {
        return $_SESSION['usuario']->perfil == $perfil;
    }
    else {
        return false;
    }
}
function get_all_users($connection) {
    $result = $connection->query("SELECT * FROM usuarios");

    $users = [];
    while ($user = $result->fetch_object('User')) {// User es un objeto usuario que devuelve fetch object
        $users[] = $user;
    }
    $result->free();

    return $users;
}
function get_user_by_id($connection, $id_usuario) {
    $id_usuario = $connection->real_escape_string($id_usuario);
    $resultquery = $connection->query("SELECT * FROM usuarios WHERE id_usuario =$id_usuario"); 
    // resultado de la consulta:
    $resultUser = null;
    if ($user = $resultquery->fetch_object('User')) {
        $resultUser= $user;
    }
    $resultquery->free();
    return $resultUser;
}
/*
PROCEDIMENTAL SERÍA:
function insert_user($connection, $user) {
    $nombre_usuario = $connection->real_escape_string($user->get_nombre_usuario());
    $clave = $connection->real_escape_string($user->get_clave());
    $nombre = $connection->real_escape_string($user->get_nombre());
    $ape1 = $connection->real_escape_string($user->get_ape1());
    $ape2 = $connection->real_escape_string($user->get_ape2());
    $email = $connection->real_escape_string($user->get_email());
    $calle = $connection->real_escape_string($user->get_calle());
    $localidad = $connection->real_escape_string($user->get_localidad());
    $codigo_postal = $connection->real_escape_string($user->get_codigo_postal());
    $pais = $connection->real_escape_string($user->get_pais());
    $perfil = $connection->real_escape_string($user->get_perfil());

    $connection->query("INSERT INTO usuarios (nombre_usuario, clave, nombre, ape1, ape2, email, calle, localidad, codigo_postal, pais, perfil) VALUES nombre_usuario = $nombre_usuario, clave = $clave, nombre = $nombre, ape1 = $ape1, ape2 = $ape2, email = $email, calle = $calle, localidad = $localidad, codigo_postal = $codigo_postal, pais = $pais, perfil = $perfil");
}
*/
function delete_user($connection, $user) {
    $id_usuario = $connection->real_escape_string($user->get_id_usuario());
    $connection->query("DELETE FROM usuarios WHERE id_usuario = $id_usuario");
}

function update_user($connection, $user) {
    $id_usuario = $connection->real_escape_string($user->get_id_libro());
    $clave = $connection->real_escape_string($user->get_clave());
    $nombre = $connection->real_escape_string($user->get_nombre());
    $ape1 = $connection->real_escape_string($user->get_ape1());
    $ape2 = $connection->real_escape_string($user->get_ape2());
    $email = $connection->real_escape_string($user->get_email());
    $calle = $connection->real_escape_string($user->get_calle());
    $localidad = $connection->real_escape_string($user->get_localidad());
    $codigo_postal = $connection->real_escape_string($user->get_codigo_postal());
    $pais = $connection->real_escape_string($user->get_pais());
    $perfil = $connection->real_escape_string($user->get_perfil());
    
    $connection->query("UPDATE usuarios SET clave = '$clave', nombre = '$nombre' , ape1 = '$ape1', ape2 = '$ape2', email = '$email', calle = '$calle', localidad = '$localidad', codigo_postal= '$codigo_postal', pais = '$pais', perfil = '$perfil' WHERE id_usuario = $id_usuario");
}
