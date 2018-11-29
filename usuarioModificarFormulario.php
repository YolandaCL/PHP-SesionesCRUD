<?php include 'core/init.php'; ?>
<?php include 'includes/overall/overallheader.php'; ?>
<?php
	$id_usuario = $_GET['id_usuario'];
	$user = get_user_by_id($conexion, $id_usuario);
?>
	<form action="usuarioModificar.php" method="post">
		<input type="hidden" name="id_usuario" value="<?php echo $id_usuario; ?>">
	FORMULARIO DE MODIFICAR USUARIO
	<ul id="login">
		<li>
			<label for="clave">clave:</label><br>
			<input type="text" id="clave" name="clave" value="<?php echo $user->get_clave(); ?>">	
		</li>
		<li>
			<label for="nombre">nombre:</label><br>
			<input type="text" id="nombre" name="nombre" value="<?php echo $user->get_nombre(); ?>">	
		</li>
		<li>
			<label for="ape1">ape1:</label><br>
			<input type="text" id="ape1" name="ape1" value="<?php echo $user->get_ape1(); ?>">	
		</li>
		<li>
			<label for="ape2">ape1:</label><br>
			<input type="text" id="ape1" name="ape1" value="<?php echo $user->get_ape1(); ?>">	
		</li>
		<li>
			<label for="email">email:</label><br>
			<input type="text" id="email" name="email" value="<?php echo $user->get_email(); ?>">	
		</li>
		<li>
			<label for="calle">calle:</label><br>
			<input type="text" id="calle" name="calle" value="<?php echo $user->get_calle(); ?>">	
		</li>
		<li>
			<label for="localidad">localidad:</label><br>
			<input type="text" id="localidad" name="localidad" value="<?php echo $user->get_localidad(); ?>">	
		</li>
		<li>
			<label for="codigo_postal">codigo_postal:</label><br>
			<input type="text" id="codigo_postal" name="codigo_postal" value="<?php echo $user->get_codigo_postal(); ?>">	
		</li>
		<li>
			<label for="pais">pais:</label><br>
			<input type="text" id="pais" name="pais" value="<?php echo $user->get_pais(); ?>">	
		</li>
		<li>
			<label for="perfil">perfil:</label><br>
			<input type="text" id="perfil" name="perfil" value="<?php echo $user->get_perfil(); ?>">	
		</li>
		<?php
//clave , nombre, ape1, ape2, email, calle, localidad, codigo_postal, pais, perfil'
		?>
		<li>
			<input type="submit" value="Modificar">
		</li>
		<li>
			<a href="index.php">Inicio</a>
		</li>
	</ul>
	</form>
            