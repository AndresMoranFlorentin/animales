<?php

require_once("app_Api/controladoresApi/apiControlador.php");
require_once("app/modelos/ModeloComentarios.php");
require_once("app_Api/vistasApi/apiVista.php");

class apiControladorComentarios extends apiControlador
{

   private $modeloComentarios;
   private $apiVista;
   private $data;
   private $controladorCentral;

   public function __construct()
   {

      $this->modeloComentarios = new ModeloComentarios();
      $this->apiVista = new apiVista();
      $this->controladorCentral=new apiControlador();
      $this->data = file_get_contents("php://input");
   }

   function mostrarComentarios()
   {
      $comentarios = $this->modeloComentarios->traerComentarios();
      $this->apiVista->response($comentarios, 200);
   }

   function agregarComentario()
   {

      $body =$this->controladorCentral->Json_a_php();

      if (!empty($body)) { //indica de si esta vacio el array, ya que podria no haber recibido nada

         $comentario = $body->comentario;
         $puntajes = $body->puntaje;
         $id = $body->id;

         $this->modeloComentarios->guardarComentario($comentario, $puntajes, $id);

      } else {
         $this->apiVista->response("problema interno del servidor,
          posiblemente error de la URL, o habia mas datos sin ser 
          ingresados", 500);
      }
   }

   function traerComentario($params = [])
   {
      $id = $params[':ID'];
      $comentario = $this->modeloComentarios->traerComentario($id);
      $this->apiVista->response($comentario, 200);
   }

   function filtrarPuntuacion($params = [])
   {
      if (!empty($params[":puntuacion"])) {

         $puntuacion = $params[":puntuacion"];
         $comentario = $this->modeloComentarios->comentario_Igual_Puntuacion($puntuacion);
         $this->apiVista->response($comentario, 200);
      } else {

         $this->apiVista->response("error el parametro puntuacion no a sido encontrado", 400);
      }
   }
   function ordenarDescen()
   {
      $comentarios = $this->modeloComentarios->traerDescen();
      $this->apiVista->response($comentarios, 200);
   }
   function ordenarAscen()
   {
      $comentarios = $this->modeloComentarios->traerAscen();
      $this->apiVista->response($comentarios, 200);
   }

   public function borrarComentario($params = [])
   {
      $id_com = $params[':ID'];
      $this->modeloComentarios->borrarComentario($id_com);
      $this->apiVista->response("comentario eliminado con éxito", 200);
   }

   function ordenarComentarios($params = [])
   {
      if ($params[':orden'] == ":ascendente") {

         $this->ordenarAscen();
      } elseif ($params[':orden'] == ":descendente") {

         $this->ordenarDescen();
      } else {
         $this->apiVista->response("error el encontrar los datos", 404);
      }
   }
}
