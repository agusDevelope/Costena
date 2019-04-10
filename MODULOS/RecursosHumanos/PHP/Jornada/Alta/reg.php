<html>
<head>
<meta charset="utf-8">
<title>Registrar</title>
</head>

<body>
<?php
	$servidor = "localhost";
	$usuario = "root";
	$contraseña = "";
	$bd = "la unica";
	
	$conexion = mysqli_connect($servidor, $usuario, $contraseña, $bd)
		or die("Error con la conexion");
		
	$Mat= $_POST["ma"];
	$Nom = $_POST["nom"];
	$Am = $_POST["am"];
	$Ap = $_POST["ap"];
	$Dir = $_POST["Dic"];
	$Numero = $_POST["Num"];
	$Carg = $_POST["car"];
	
	
	$insertar = "INSERT into jornada VALUES ('$Mat','$Nom','$Am','$Ap','$Dir','$Numero','$Carg')";

	$resultado = mysqli_query($conexion, $insertar)
		or die ("Error al insertar registro");
		
	mysqli_close($conexion);
	echo "Los datos se insertaron correctamente";	
	?>

<br>
<br>
	Bienvenido(a) <?php echo " $Nom"; echo " $Am"; echo " $Ap "; ?>
<br>
	Tu matricula: <?php echo " $Usu "; ?> 
	
<br>
<br>
    <a href="../Admin/Menu admin/Menu admin.html" target="_self">Regresar</a>
	
		
</body>
</html>