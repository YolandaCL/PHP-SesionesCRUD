<?php require 'core/init.php'; ?>
<?php include 'includes/overall/overallheader.php'; ?>

	<h1>Gestionar Usuarios</h1>
	<p>Gestiona aquí los usuarios. Puedes crear, borrar o modificar.</p>
	
	<table>
		<tr>
			<th>Id_usuario</th>
			<th>Nombre_usuario</th>
			<th>Clave</th>
			<th>Accion</th>
		</tr>
	<?php foreach (get_all_users($conexion) as $user) { ?>
		<tr>
			<td>
				<?php echo $book->get_id_usuario() ?>
			</td>
			<td>
				<?php echo $book->get_nombre_usuario() ?>
			</td>
			<td>
				<a href="soyEmpleado_register.php?">Insertar</a>&nbsp;
				<a href="usuarioModificarFormulario.php?id_usuario=<?php echo $user->get_id_usuario() ?>">Modificar</a>&nbsp;
				<a href="usuarioBorrar.php?id_usuario=<?php echo $user->get_id_usuario() ?>">Borrar</a>&nbsp;

				<a class="borrar" data-id="<?php echo $user->get_id_usuario() ?>" href="#">
				Borrar Ajax</a>
<?php
//usuario

/*
* Se ha hecho con POO. Si no quisieramos hacerlo con POO, sería:
*  <a class="borrar" data-id="<?php echo $book->id_libro ?>" href="#">Borrar Ajax</a>
*/?>
			</td>
		</tr>
	<?php } ?>
	
	</table>

	<script>
// esto es con ajax
		function usuarioBorrar() {
			//this es el contexto en js con el que se llama la funcion. en este caso es el objeto que desencadena el evento:
			//es el enlace sobre el qie se va a hacer el "click": borrar


			//  data-????: es para atributos propios, que no tienen porque estar reconocidos en html 
			var id_usuario = this.getAttribute('data-id');
			//creo el objeto XMLHttpRequest, que es el objeto que sabe
			//como hacer peticiones al servidor

			var xhr = new XMLHttpRequest();
			//Una vez he creado el objeto, le digo que haga una peticion
			//a la direccione que he creado borrarlibro
			//ajax tiene que ser true : asincrona
			xhr.open('GET', 'usuarioBorrar.php?id=' + id_usuario, true); 
			xhr.send(null);
//acedo al padre del enlace , que es el td. Despues acedo al padre del td que es el tr, que es la fila que quiero borrar
			var tr = this.parentNode.parentNode;
// Tengo el tr a borrar. Accedo a su padre (que es table) y le digo a su padre que lo borre (usando removeChild)
			tr.parentNode.removeChild(tr);
		}
		// .borrar : se refiere a la clase "borrar", del enlace que hay arriba

		var linksBorrar = document.querySelectorAll('.borrar');
		linksBorrar.forEach(function (link) {
			link.addEventListener('click', usuarioBorrar);
		});

	</script>

<?php include 'includes/overall/overallfooter.php'; ?>