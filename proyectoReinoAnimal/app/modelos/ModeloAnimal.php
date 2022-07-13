<?php
require_once "Modelo.php" ;

class ModeloAnimal extends Modelo
{
  function traerAnimales()
  {
    $conexion = $this->conexionSQL();/*llamo a la clase modelo animal para asi pedirle
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
    $conexion = $this->conexionSQL();
    $sql = 'SELECT a.*,e.especies FROM animales AS a , especies AS e ' .
    'WHERE a.id_animales=? AND a.id_especie=e.id_especie';
    $resultado = $conexion->prepare($sql);
    $resultado->execute([$id]);
    $animal = $resultado->fetchAll(PDO::FETCH_NAMED);

    return $animal[0];
  }
  function ComprueboQueExiste($id)
  {
    $conexion = $this->conexionSQL();
    $sql = 'SELECT FROM animales WHERE id_animales=?';
    $resultado = $conexion->prepare($sql);
    $resultado->execute([$id]);
    $animal = $resultado->fetchAll(PDO::FETCH_NAMED);

    return $animal;
  }
  function busquedaDelAnimal($animal,$especie){
    $sql='SELECT a.*,e.especies FROM animales AS a , especies AS e ' .
    'WHERE a.nombre =? AND e.especies =?';
    $conexion=$this->conexionSQL();
    $busqueda=$conexion->prepare($sql);
    $busqueda->execute([$animal,$especie]);

    $resultado=$busqueda->fetchAll(PDO::FETCH_OBJ);

    return $resultado[0];
  }
  function borrarFilaAnimal($id)
  {
    $sql = "DELETE FROM animales WHERE id_animales=?";
    $conexion = $this->conexionSQL();
    $preparado = $conexion->prepare($sql);
    $preparado->execute([$id]);
  }
  function actualizarFila($nombre, $descripcion, $alimento, $habitat, $especie, $extinto, $id)
  {
    $sql = "UPDATE animales 
    SET nombre=?,descripcion=?,alimentacion=?,
    habitat=?,extinto=?,id_especie=? WHERE id_animales=?";
    $conexion = $this->conexionSQL();
    $preparado = $conexion->prepare($sql);
    $preparado->execute([$nombre, $descripcion, $alimento, $habitat,$extinto, $especie, $id]);
  }

  function agregarInfoAnimal($nombre, $descripcion, $alimento, $habitat, $especie, $extinto)
  {

    $sql = "INSERT INTO animales (nombre, descripcion, alimentacion, habitat, extinto,id_especie) 
                    VALUES (?, ?, ?, ?, ?, ?)"; //nombres de las columnas de la tabla
    $conexion = $this->conexionSQL();
    $preparado = $conexion->prepare($sql);
    $preparado->execute([$nombre,$descripcion,$alimento,$habitat,$extinto,$especie]);
  }

  function traerAnimalesHasta($inicial,$limite){
    $conexion=$this->conexionSQL();

     $sql="SELECT * FROM animales LIMIT ".$inicial.",".$limite." ";
    
     $resultado=$conexion->prepare($sql);
     $resultado->execute();
     $animales=$resultado->fetchAll(PDO::FETCH_NAMED);

     return $animales;
  }
  function buscarPalabraAnimal($columna,$palabra){
    
    $conexion=$this->conexionSQL();
    $sql="SELECT * FROM animales WHERE ".$columna." LIKE ? ";
    $resultado=$conexion->prepare($sql);
  $resultado->execute([$palabra]);
    $animales=$resultado->fetchAll(PDO::FETCH_NAMED);

    return $animales;
  }

}
