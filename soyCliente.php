<?php require 'core/init.php'; ?>
<?php include 'includes/overall/overallheader.php'; ?>

	<h1>Mis encargos de libros</h1>
<h2> <i>Libreria para Clientes registrados</i>. </h2>
<p>Gestiona aquí tus encargos de libros. Puedes hacer pedido o consultar tus pedidos.</p>
	
	<table>
		<tr>
			<th>Id</th>
			<th>Titulo</th>
			<th>Accion</th>
		</tr>
	<?php foreach (get_all_books($conexion) as $book) { ?>
		<tr>
			<td>
				<?php echo $book->get_id_libro() ?>
			</td>
			<td>
				<?php echo $book->get_titulo() ?>
			</td>
			
			<td>
				<a href="libroHacerPedido.php">Hacer pedido</a>
				<a href="libroConsultarPedido.php">Consultar pedido</a>
				

				<a class="consultarpedido" data-id="<?php echo $book->get_id_libro() ?>" href="#">
				Consultar pedido con Ajax</a>
			</td>
		</tr>
	<?php } ?>
	</table>

	<script>
// esto es con ajax
		function borrarLibro() {
			//this es el contexto en js con el que se llama la funcion. en este caso es el objeto que desencadena el evento:
			//es el enlace sobre el qie se va a hacer el "click": borrar


			//  data-????: es para atributos propios, que no tienen porque estar reconocidos en html 
			var id_libro = this.getAttribute('data-id');
			//creo el objeto XMLHttpRequest, que es el objeto que sabe
			//como hacer peticiones al servidor

			var xhr = new XMLHttpRequest();
			//Una vez he creado el objeto, le digo que haga una peticion
			//a la direccione que he creado borrarlibro
			//ajax tiene que ser true : asincrona
			xhr.open('GET', 'libroBorrar.php?id=' + id_libro, true); 
			xhr.send(null);
//acedo al padre del enlace , que es el td. Despues acedo al padre del td que es el tr, que es la fila que quiero borrar
			var tr = this.parentNode.parentNode;
// Tengo el tr a borrar. Accedo a su padre (que es table) y le digo a su padre que lo borre (usando removeChild)
			tr.parentNode.removeChild(tr);
		}
		// .borrar : se refiere a la clase "borrar", del enlace que hay arriba

		var linksBorrar = document.querySelectorAll('.borrar');
		linksBorrar.forEach(function (link) {
			link.addEventListener('click', libroBorrar);
		});

	</script>

<?php include 'includes/overall/overallfooter.php'; ?>