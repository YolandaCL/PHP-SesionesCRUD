<nav id="navEspecifico">
	<!--dependiendo del usuario, muestra su menu-->
    <ul>
		<li><a href="index.php">HOME</a></li>
		<li><a href="contacta.php">CONTACTA</a></li>
		<?php
			// Hola tuNombre
        if (check_rol('colegio')) {
                //if ($_SESSION['usuario']->rol == 'colegio') {
            ?>
                <li><a href="soyColegio.php">Encargos del colegio</a></li>
            <?php } 
		
        if (check_rol('empleado')) {
                //if ($_SESSION['usuario']->rol == 'empleado') {
            ?>
                <li><a href="soyEmpleado_Catalogo.php">Gestionar catálogo</a></li>
            <?php } 

         if (check_rol('empleado')) {
                //if ($_SESSION['usuario']->rol == 'empleado') {
            ?>
                <li><a href="soyEmpleado_RegisterFormulario.php">Registrar a usuarios y empleados</a></li>
            <?php }
        
        if (check_rol('empleado')) {
                //if ($_SESSION['usuario']->rol == 'empleado') {
            ?>
                <li><a href="soyEmpleado_Usuarios.php">Gestionar usuarios</a></li>
            <?php }

        if (check_rol('proveedor')) {
                //if ($_SESSION['usuario']->rol == 'proveedor') {
            ?>
                <li><a href="soyProveedor.php">Gestion de Proveedor en libreria </a></li>
            <?php }
        
        if (check_rol('cliente')) {
                //if ($_SESSION['usuario']->rol == 'cliente') {
            ?>
                <li><a href="soyCliente.php">Mis encargos a la libreria </a></li>
            <?php }
        
        if (check_rol('suscriptor')) {
                //if ($_SESSION['usuario']->rol == 'suscriptor') {
            ?>
                <li><a href="soySuscriptor.php">Mis suscripciones y a la libreria </a></li>
            <?php }
        ?>
    </ul>
</nav>
