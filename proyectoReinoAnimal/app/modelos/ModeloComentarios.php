<?php
require_once "Modelo.php";

class ModeloComentarios extends Modelo
{

function traerComentarios(){

    $conexion = $this->conexionSQL();

    $sql = 'SELECT * FROM comentarios';
    $resultado = $conexion->prepare($sql);
    $resultado->execute();
    $comentarios= $resultado->fetchAll(PDO::FETCH_NAMED);

    return $comentarios;

}
function traerComentarioTablaid($id){

  $conexion = $this->conexionSQL();
  $sql = 'SELECT * FROM comentarios WHERE id=?';
  $resultado = $conexion->prepare($sql);
  $resultado->execute([$id]);

}
function traerComentario($id){
    $conexion = $this->conexionSQL();
    $sql = 'SELECT * FROM comentarios WHERE id_animales=?';
    $resultado = $conexion->prepare($sql);
    $resultado->execute([$id]);
    $comentario = $resultado->fetchAll(PDO::FETCH_NAMED);

    return $comentario;

}
function guardarComentario($comentario, $puntaje,$id){

  $sql = "INSERT INTO comentarios (comentario, puntaje, id_animales) 
                    VALUES (?,?,?)"; //nombres de las columnas de la tabla
    $conexion = $this->conexionSQL();
    $preparado = $conexion->prepare($sql);
    $preparado->execute([$comentario,$puntaje,$id]);

}
function borrarComentario($id)
{
  $sql = "DELETE FROM comentarios WHERE id=?";
  $conexion = $this->conexionSQL();
  $preparado = $conexion->prepare($sql);
  $preparado->execute([$id]);
}
function traerDescen(){
 $sql="SELECT * FROM comentarios ORDER BY puntaje DESC";
 $conexion=$this->conexionSQL();
 $resultado=$conexion->prepare($sql);
 $resultado->execute();

 $puntaje=$resultado->fetchAll(PDO::FETCH_NAMED);

 return $puntaje;
}
function traerAscen(){
  $sql="SELECT * FROM comentarios ORDER BY puntaje ASC";
  $conexion=$this->conexionSQL();
  $resultado=$conexion->prepare($sql);
  $resultado->execute();
 
  $puntaje=$resultado->fetchAll(PDO::FETCH_NAMED);
 
  return $puntaje;
 }
 function comentario_Igual_Puntuacion($puntuacion){

  $sql="SELECT * FROM comentarios WHERE puntaje=?";
  $conexion=$this->conexionSQL();
  $resultado=$conexion->prepare($sql);
  $resultado->execute([$puntuacion]);
  $comentarios=$resultado->fetchAll(PDO::FETCH_NAMED);
  return $comentarios;
 }
 
}