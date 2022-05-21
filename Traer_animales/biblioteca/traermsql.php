<?php
function conexion()
{
  $user = "root";
  $pass = "";
  $db = "reino_animal";
  $host = "localhost";
  $conexion = new PDO("mysql:host=$host;dbname=$db", $user, $pass);//conecta php con la base de datos

  return $conexion;
}

function TraerDatosMSQL()
{
  $conexion = conexion();//creo la conexion con msql como una puerta

  //$tabla = 'animales';
  $sql_todo = 'SELECT * FROM animales';
  $sql_parte='SELECT Nombre, descripcion, alimentacion, habitat FROM animales';
  $resultado = $conexion->prepare($sql_todo);
  $resultado->execute();
  $tarea = $resultado->fetchAll(PDO::FETCH_NAMED);//traigo informacion dura del msql la parte string mas que nada

  return $tarea;//la matrix con todos los datos del msql, cada fila seria un arreglo en si
}
?>