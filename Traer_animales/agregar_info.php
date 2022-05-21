<?php 
echo "entraste a la informacion dura del hardware: ";
require_once('biblioteca/traermsql.php');

 print_r($_POST);

 $nombre = $_POST['nombre'];
 $descripcion = $_POST['descripcion'];
 $alimento= $_POST['alimentacion'];
 $habitat= $_POST['habitat'];
 $especie=$_POST['especie'];
 $extinto= $_POST['extinto'];

 $sql = "INSERT INTO animales (nombre, descripcion, alimentacion, habitat, extinto,id_especie) 
         VALUES ('$nombre', '$descripcion', '$alimento','$habitat', '$extinto','$especie')";
$conexion=conexion();
$preparado=$conexion->prepare($sql);
$preparado->execute();

 /*$Tabla=$conexion->prepare($sql);
 //var_dump($Tabla);
 $Tabla->exec();*/
 
?>