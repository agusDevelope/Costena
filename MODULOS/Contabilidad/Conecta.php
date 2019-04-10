
<?php
//CONEXION CON EL SERVIDOR, USUARIO, CONTRASEÑA Y NOMBRE DE LA BASE DE DATOS
$conexion = mysqli_connect("localhost","root","","contabilidad");
if (mysqli_connect_errno())
{
  echo "Fallo la conexión con la Base de Datos" . mysqli_connect_error();
  exit();
}
//FALLO EN CONEXION A LA BASE DE DATOS
mysqli_select_db($conexion,"contabilidad") or die("Fallo la Selección con la Base de Datos ");
mysqli_set_charset($conexion,"utf8");




 ?>
