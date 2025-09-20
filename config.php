<?php
$host='localhost';
$usuario='root';
$contrasena='reichert_15';
$basedatos='LosTroncos';

$conexion=mysqli_connect($host,$usuario,$contrasena,$basedatos);
if(!$conexion){
    die("Error de conexión: ".mysqli_connect_error());
}
?>
