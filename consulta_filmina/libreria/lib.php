<?php
  function conexion(){
$user="root";
$pass="";
$db="sobrehumanos";
$host="localhost";
$conexion=new PDO("mysql:host=$host;dbname=$db",$user,$pass);

return $conexion;
  }

  function TraerDatosMSQL(){
    $tabla='personajes';
    $sql = 'SELECT * FROM personajes';
    $conexion=conexion();
    $resultado = $conexion->query($sql);
    $tarea = $resultado->fetchAll(PDO::FETCH_NAMED);

    return $tarea;
  }
?>