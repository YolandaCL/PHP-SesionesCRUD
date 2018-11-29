
<?php 

$conexion = new mysqli("localhost", "root", "", "libreria");
if($conexion->connect_errno){
	die("Lo sentimos, la conexion ha fallado: ".$conexion->$connect_error);
}

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

/* con PDO sería
function obtenerConexion(){
	// MYSQL
	$dsn = "mysql:host=localhost;dbname=aga";
	$usuario = "aga";
	$password = "aga";
	// OCI
	$dsn = "oci:dbname=//hpproliant.fleming.as:1521/orclhp.fleming.as;charset=AL32UTF8";
    $usuario = "";
	$password = "";

	try {
		$opciones = array(PDO::ATTR_PERSISTENT => true);
          if (substr_count($dsn, 'mysql') > 0){ 
              $opciones[PDO::MYSQL_ATTR_INIT_COMMAND] = 'SET NAMES utf8';
          } 
		$gbd = new PDO($dsn, $usuario, $password, $opciones);
		$gbd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_SILENT);
		return $gbd;
	} catch (PDOException $e) {
		print "<p>Error: No puede conectarse con la base de datos.</p>\n";
		print "<p>Error: ".$e->getMessage()."</p>\n";
		exit();
	}
}
*/