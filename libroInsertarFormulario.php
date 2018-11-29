<?php include 'core/init.php'; ?>
<?php include 'includes/overall/overallheader.php'; ?>

	<form action="libroInsertar.php" method="post">
		<input type="hidden" name="id_libro" value="<?php echo $id_libro; ?>">
	FORMULARIO DE INSERTAR LIBRO
	<ul id="login">
		<li>
			<label for="autor">autor:</label><br>
			<input type="text" id="autor" name="autor" value="">	
		</li>
		<li>
			<label for="titulo">titulo:</label><br>
			<input type="text" id="titulo" name="titulo" value="">	
		</li>
		<li>
			<label for="isbn">isbn:</label><br>
			<input type="text" id="isbn" name="isbn" value="" placeholder="9788499640198">	
		</li>
		<li>
			<label for="editorial">editorial:</label><br>
			<input type="text" id="editorial" name="editorial" value="">	
		</li>
		<li>
			<label for="idioma">idioma:</label><br>
			<input type="text" id="idioma" name="idioma" value="">	
		</li>
		<li>
			<label for="year">año:</label><br>
			<input type="text" id="year" name="year" value="">	
		</li>
		<li>
			<label for="cubierta">cubierta:</label><br>
			<input type="text" id="cubierta" name="cubierta" value="">	
		</li>
		<li>
			<label for="tipo">tipo:</label><br>
			<input type="text" id="tipo" name="tipo" value="">	
		</li>
		<li>
			<label for="paginas">páginas:</label><br>
			<input type="text" id="paginas" name="paginas" value="">	
		</li>
		<li>
			<label for="unidades">unidades:</label><br>
			<input type="text" id="unidades" name="unidades" value="">	
		</li>
		<?php
//autor titulo isbn editorial idioma year cubierta tipo paginas unidades
		?>
		<li>
			<input type="submit" value="Insertar">
		</li>
		<li>
			<a href="index.php">Inicio</a>
		</li>
	</ul>
	</form>
            