<?php include 'core/init.php'; ?>
<?php include 'includes/overall/overallheader.php'; ?>

	<form action="register.php" method="post">
	FORMULARIO DE REGISTRO
	<ul id="login">
		<li>
			<label for="nombre_usuario">Nombre_usuario:</label><br>
			<input type="text" id="nombre_usuario" name="nombre_usuario" value="">
		</li>
		<li>
			<label for="clave">Clave:</label><br>
			<input type="text" id="clave" name="clave" value="">
		</li>
		<li>
			<label for="nombre">Nombre:</label><br>
			<input type="text" id="nombre" name="nombre" value="">
		</li>
		<li>
			<label for="ape1">Apellido_primero:</label><br>
			<input type="text" id="ape1" name="ape1" value="">
		</li>
		<li>
			<label for="ape2">Apellido_segundo:</label><br>
			<input type="text" id="ape2" name="ape2" value="">
		</li>
		<li>
			<label for="email">Email:</label><br>
			<input type="text" id="email" name="email" value="" placeholder="tuEmail@gmail.com" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
		</li>
		<li>
			<label for="calle">Calle:</label><br>
			<input type="text" id="calle" name="calle" value="">
		</li>
		<li>
			<label for="localidad">Localidad:</label><br>
			<input type="text" id="localidad" name="localidad" value="">
		</li>
		<li>
			<label for="codigo_postal">Codigo_postal:</label><br>
			<input type="text" id="codigo_postal" name="codigo_postal" value="" pattern="[0-9]{5}$" >
		</li>
		<li>
			<label for="pais">Pais:</label><br>
			<input type="text" id="pais" name="pais" value="">
		</li>
		<li>
			<label for="perfil">Perfil:</label><br>
			<select name="perfil" id="perfil">
            
                 <option value="cliente" selected></option>
                 <option value="suscriptor" ></option>
                 <option value="colegio" ></option>
                 <option value="proveedor" ></option>
             
            </select>
		</li>
        <li>
			<input type="submit" value="Registrarse">
		</li>
		<li>
			<a href="register.php">Inicio registrarse</a>
    
		</li>
        </ul>
	</form>
	<p>aquí se muestra la libreria</p>
	
<?php include 'includes/overall/overallfooter.php'; ?>