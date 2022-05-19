<?php 
echo "entraste a la informacion dura del hardware: ";
require_once('biblioteca/traermsql.php');

 print_r($_POST);

 $nombre = $_POST['nombre'];
 $descripcion = $_POST['descripcion'];
 $alimento= $_POST['alimentacion'];
 $habitat= $_POST['habitat'];
 $extinto= $_POST['extinto'];

 /*$sql = "INSERT INTO animales (nombre, descripcion, alimentacion, extinto) 
         VALUES (?, ?, ?, 0)";

 $conexion = conexion();

 $sentencia = $conexion->prepare($sql);
 $sentencia->execute([$nombre, $descripcion, $alimento,$habitat,$extinto]);
 */
?>