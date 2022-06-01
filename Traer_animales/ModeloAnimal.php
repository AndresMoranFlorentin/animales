<?php

class Modelo_animal
{
  function Conexion()
  {
    $user = "root";
    $pass = "";
    $db = "reino_animal";
    $host = "localhost";
    $conexion = new PDO("mysql:host=$host;dbname=$db", $user, $pass); //conecta php con la base de datos

    return $conexion;
  }
  function traerContraseña($mail)
  {
    $conexion = $this->Conexion();
    $sql = 'SELECT * FROM acceso WHERE email = ?';
    $query = $conexion->prepare($sql);
    $query->execute([$mail]);
    $usuario = $query->fetch(PDO::FETCH_ASSOC);

    return $usuario;
  }
  function traerAnimales()
  {
    $conexion = $this->Conexion();/*llamo a la clase modelo animal para asi pedirle
   algo que ella tenga, en este caso la conexion()*/ //creo la conexion con msql como una puerta
    $sql = 'SELECT e.especies, a.id_animales, a.nombre,a.descripcion,a.alimentacion, a.habitat,a.extinto ' .
           'FROM animales AS a , especies AS e ' .
           'WHERE e.id_especie = a.id_especie; ' .
           'ORDER BY id_especie ASC';
    $resultado = $conexion->prepare($sql);
    $resultado->execute();
    $tarea = $resultado->fetchAll(PDO::FETCH_NAMED); //traigo informacion dura del msql la parte string mas que nada

    return $tarea; //la matrix con todos los datos del msql, cada fila seria un arreglo en si
  }
  function traerUnaFila($id)
  {
    $conexion = $this->Conexion();
    $sql = 'SELECT * FROM animales AS a , especies AS e ' .
    'WHERE a.id_animales=? AND a.id_especie=e.id_especie';
    $resultado = $conexion->prepare($sql);
    $resultado->execute([$id]);
    $tarea = $resultado->fetchAll(PDO::FETCH_NAMED);

    return $tarea;
  }
  function borrarFilaAnimal($id)
  {
    //echo "LLegaste hasta la funcion borrar fila en el modelo y el id es =".$id." ";
    $sql = "DELETE FROM animales WHERE id_animales=?";
    $conexion = $this->Conexion();
    $preparado = $conexion->prepare($sql);
    $preparado->execute([$id]);
  }
  function actualizarFila($nombre, $descripcion, $alimento, $habitat, $especie, $extinto, $id)
  {
    $sql = "UPDATE animales 
    SET nombre=?,descripcion=?,alimentacion=?,
    habitat=?,extinto=?,id_especie=? WHERE id_animales=?";
    $conexion = $this->Conexion();
    $preparado = $conexion->prepare($sql);
    $preparado->execute([$nombre, $descripcion, $alimento, $habitat,$extinto, $especie, $id]);
  }

  function agregarInfoAnimal($nombre, $descripcion, $alimento, $habitat, $especie, $extinto)
  {

    $sql = "INSERT INTO animales (nombre, descripcion, alimentacion, habitat, extinto,id_especie) 
                    VALUES (?, ?, ?, ?, ?, ?)"; //nombres de las columnas de la tabla
    $conexion = $this->Conexion();
    $preparado = $conexion->prepare($sql);
    $preparado->execute($nombre,$descripcion,$alimento,$habitat,$extinto,$especie);
  }
}
