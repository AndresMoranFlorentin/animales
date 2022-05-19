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
  $tabla = 'animales';
  $sql_todo = 'SELECT * FROM animales';
  $sql_parte='SELECT Nombre, descripcion, alimentacion, habitat FROM animales';
  $conexion = conexion();//creo la conexion con msql como una puerta
  $resultado = $conexion->query($sql_parte);
  $tarea = $resultado->fetchAll(PDO::FETCH_NAMED);//traigo informacion dura del msql la parte string mas que nada

  return $tarea;//arreglo con los datos en fila, cada fila seria un arreglo
}
?>