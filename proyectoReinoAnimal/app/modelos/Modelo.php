<?php

class Modelo
{
  function conexionSQL()
  {
    $user = "root";
    $pass = "";
    $db = "reino_animal";
    $host = "localhost";
    $conexion = new PDO("mysql:host=$host;dbname=$db", $user, $pass); //conecta php con la base de datos

    return $conexion;
  }
}
