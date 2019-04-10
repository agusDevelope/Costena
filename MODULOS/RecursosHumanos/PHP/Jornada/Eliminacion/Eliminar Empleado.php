<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Eliminar Registro</title>
</head>

<body>
<?php
	$servidor = "localhost";
	$usuario = "root";
	$contraseña = "";
	$bd = "la unica";
	
	$conexion = mysqli_connect($servidor, $usuario, $contraseña, $bd)
		or die("Error con la conexion");
		
	$clave = $_POST["EE"];
	
	mysqli_query($conexion, "DELETE from empleados where Nombre ='$clave'")
		or die ("Error al eliminar registro");
		
	mysqli_close($conexion);
	echo "Los datos se eliminaron correctamente";	
?>
<br>
<br>
<a href="../Admin/Menu admin/Menu admin.html" target="_self">Regresar</a>
</body>
</html>