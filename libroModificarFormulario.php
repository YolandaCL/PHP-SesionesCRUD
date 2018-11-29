<?php include 'core/init.php'; ?>
<?php include 'includes/overall/overallheader.php'; ?>
<?php
	$id_libro = $_GET['id_libro'];
	$book = get_book_by_id($conexion, $id_libro);
?>
	<form action="libroModificar.php" method="post">
		<input type="hidden" name="id_libro" value="<?php echo $id_libro; ?>">
	FORMULARIO DE MODIFICAR LIBRO
	<ul id="login">
		<li>
			<label for="autor">autor:</label><br>
			<input type="text" id="autor" name="autor" value="<?php echo $book->get_autor(); ?>">	
		</li>
		<li>
			<label for="titulo">titulo:</label><br>
			<input type="text" id="titulo" name="titulo" value="<?php echo $book->get_titulo(); ?>">	
		</li>
		<li>
			<label for="isbn">isbn:</label><br>
			<input type="text" id="isbn" name="isbn" value="<?php echo $book->get_isbn(); ?>">	
		</li>
		<li>
			<label for="editorial">editorial:</label><br>
			<input type="text" id="editorial" name="editorial" value="<?php echo $book->get_editorial(); ?>">	
		</li>
		<li>
			<label for="idioma">idioma:</label><br>
			<input type="text" id="idioma" name="idioma" value="<?php echo $book->get_idioma(); ?>">	
		</li>
		<li>
			<label for="year">año:</label><br>
			<input type="text" id="year" name="year" value="<?php echo $book->get_year(); ?>">	
		</li>
		<li>
			<label for="cubierta">cubierta:</label><br>
			<input type="text" id="cubierta" name="cubierta" value="<?php echo $book->get_cubierta(); ?>">	
		</li>
		<li>
			<label for="tipo">tipo:</label><br>
			<input type="text" id="tipo" name="tipo" value="<?php echo $book->get_tipo(); ?>">	
		</li>
		<li>
			<label for="paginas">páginas:</label><br>
			<input type="text" id="paginas" name="paginas" value="<?php echo $book->get_paginas(); ?>">	
		</li>
		<li>
			<label for="unidades">unidades:</label><br>
			<input type="text" id="unidades" name="unidades" value="<?php echo $book->get_unidades(); ?>">	
		</li>
		<?php
//autor titulo isbn editorial idioma year cubierta tipo paginas unidades
		?>
		<li>
			<input type="submit" value="Modificar">
		</li>
		<li>
			<a href="index.php">Inicio</a>
		</li>
	</ul>
	</form>
            