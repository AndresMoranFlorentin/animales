<?php

require_once("app_Api/controladoresApi/apiControladorHome.php");
require_once("app/modelos/ModeloComentarios.php");
require_once("app_Api/vistasApi/apiVistaHome.php");

class apiControladorComentarios
{

   private $modeloComentarios;
   private $apiVistaHome;
   private $data;

   public function __construct()
   {

      $this->modeloComentarios = new ModeloComentarios();
      $this->apiVistaHome = new apiVistaHome();
      $this->data = file_get_contents("php://input");
   }
   function mostrarComentarios()
   {

      $comentarios = $this->modeloComentarios->traerComentarios();
      $this->apiVistaHome->response($comentarios, 200);
   }
   function agregarComentario($params = [])
   {

      $body = json_decode($this->data);
      if (!empty($body)) { //indica de si esta vacio el array, ya que podria no haber recibido nada
         $comentario = $body->comentario;
         $puntajes = $body->puntaje;
         $id = $body->id;

         $this->modeloComentarios->guardarComentario($comentario, $puntajes, $id);
      } else {
         $this->apiVistaHome->response("problema interno del servidor, posiblemente error de la URL, o habia mas datos sin ser ingresados", "500");
      }
   }
   function traerComentario($params = [])
   {

      $id = $params[':ID'];

      $comentario = $this->modeloComentarios->traerComentario($id);

      $this->apiVistaHome->response($comentario, 200);
   }

   function filtrarPuntuacion($params = [])
   {
      // echo "me llega los params ".$params[":puntuacion"]."";

      if (!empty($params[":puntuacion"])) {

         $puntuacion = $params[":puntuacion"];
         $comentario = $this->modeloComentarios->comentario_Igual_Puntuacion($puntuacion);
         $this->apiVistaHome->response($comentario, 200);
      } else {
         $this->apiVistaHome->response("error el parametro puntuacion no a sido encontrado", "400");
      }
   }
   function ordenarDescen()
   {
      $comentarios = $this->modeloComentarios->traerDescen();
      $this->apiVistaHome->response($comentarios, 200);
   }
   function ordenarAscen()
   {
      $comentarios = $this->modeloComentarios->traerAscen();
      $this->apiVistaHome->response($comentarios, 200);
   }
   public function borrarComentario($params = [])
   {
      $comentario_id = $params[':ID'];
      $comentario = $this->modeloComentarios->traerComentarioTablaid($comentario_id);

      if ($comentario) { //si llega un array cargado, quiere decir que existe una fila con ese id para poder borrar
         $this->modeloComentarios->borrarComentario($comentario_id);
         $this->apiVistaHome->response("comentario id=$comentario_id eliminada con éxito", 200);
      } else {
         $this->apiVistaHome->response("comentario id=$comentario_id not found no se encontro", 404);
      }
   }
   function ordenarComentarios($params = [])
   {

      if ($params[':orden'] == ":ascendente") {

         $comentarios = $this->modeloComentarios->traerAscen();

         if (!empty($comentarios)) {
            $this->apiVistaHome->response($comentarios, 200);
         } else {
            echo "mal";
         }
      } elseif ($params[':orden'] == ":descendente") {

         $comentarios = $this->modeloComentarios->traerDescen();

         if (!empty($comentarios)) {
            $this->apiVistaHome->response($comentarios, 200);
         } else {
            $this->apiVistaHome->response("fracaso el encontrar los datos", 404);
         }
      } else {
         $this->apiVistaHome->response("fracaso el encontrar los datos", 404);
      }
   }
}
