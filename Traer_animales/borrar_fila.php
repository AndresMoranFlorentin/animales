<?php
require_once('biblioteca/traermsql.php');
$id=$_GET['id'];
print_r($_GET);
$sql="DELETE FROM animales WHERE id_animales=?";
$conexion=conexion();
$preparado=$conexion->prepare($sql);
$preparado->execute([$id]);
header("Location:/web2/Traer_animales/index.php");
?>