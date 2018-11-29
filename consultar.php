<?php include 'core/init.php'; ?>
<?php include 'includes/overall/overallheader.php'; ?>
<?php session_start();?>

	<h1>Consultar productos</h1>
	
	<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
	
	<select name="c1">
	  <option>Todas</option>
	  <?php
	   $conexion = f_conexion();
	   $sql="SELECT cod_cat, nombre_cat FROM categorias"; 
	</select>
	
<?php include 'includes/overall/overallfooter.php'; ?>