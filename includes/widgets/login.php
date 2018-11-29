<div class="widget">
	<h2> Login</h2>
	<div class="inner">
		<?php if (isset($_SESSION['usuario'])) { ?>
		<!--usuario es un objeto, y hay que aceder al nombre de ese objeto-->
			<h2 style="color:blue">Hola <?php echo $_SESSION['usuario']->nombre; ?>
				(<a href="logout.php">Logout</a>)
			</h2>
		<?php 
		}
		else {
		?>
		Log in/Registro

			<form action="login.php" method="post">
			<ul id="login">
				<li>
					Nombre:<br>
					<input type="text" name="nombre">
				</li>
				<li>
					Clave:<br>
					<input type="text" name="clave">
				</li>
				<li>
					<input type="submit" value="Log in">
				</li>
				<li>
					<a href="register.php">Registro</a>
		            

				</li>
			</ul>
			</form>
		<?php } ?>
	</div>
</div>
