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
function traerComentario($id){
    $conexion = $this->conexionSQL();
    $sql = 'SELECT * FROM comentarios ' .
    'WHERE comentarios.id=?';
    $resultado = $conexion->prepare($sql);
    $resultado->execute([$id]);
    $comentario = $resultado->fetchAll(PDO::FETCH_NAMED);

    return $comentario[0];

}
function guardarComentario($comentario, $puntaje,$id){
$i=1;
  $sql = "INSERT INTO comentarios (comentario, puntaje, id_animales,id_usuario) 
                    VALUES (?,?,?,?)"; //nombres de las columnas de la tabla
    $conexion = $this->conexionSQL();
    $preparado = $conexion->prepare($sql);
    $preparado->execute([$comentario,$puntaje,$id,$i]);

}
function borrarComentario($id)
{
  $sql = "DELETE FROM comentarios WHERE id=?";
  $conexion = $this->conexionSQL();
  $preparado = $conexion->prepare($sql);
  $preparado->execute([$id]);
}
function traerDescen(){
 $sql="SELECT * FROM comentarios ORDER BY comentarios.puntaje DES";
 $conexion=$this->conexionSQL();
 $resultado=$conexion->prepare($sql);
 $resultado->execute();

 $puntaje=$resultado->fetchAll(PDO::FETCH_NAMED);

 return $puntaje;
}
function traerAscen(){
  $sql="SELECT * FROM comentarios ORDER BY comentarios.puntaje ASC";
  $conexion=$this->conexionSQL();
  $resultado=$conexion->prepare($sql);
  $resultado->execute();
 
  $puntaje=$resultado->fetchAll(PDO::FETCH_NAMED);
 
  return $puntaje;
 }
}