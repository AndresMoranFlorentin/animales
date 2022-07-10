<?php
require_once("app/modelos/ModeloAnimal.php");
require_once("app/modelos/ModeloComentarios.php");
require_once("app_Api/vistasApi/apiVistaHome.php");
require_once("app/modelos/ModeloEspecie.php");
class apiControladorHome
{

   private $modeloAnimal;
   private $modeloEspecie;
   private $apiVistaHome;
   private $modeloComentarios;

   public function __construct()
   {

      $this->modeloAnimal = new ModeloAnimal();
      $this->modeloEspecie = new ModeloEspecie();
      $this->modeloComentarios = new ModeloComentarios();
      $this->apiVistaHome = new apiVistaHome();
      $this->data = file_get_contents("php://input");
   }
   function mostrarHome()
   {

      $animales = $this->modeloAnimal->traerAnimales();
      $this->apiVistaHome->response($animales, "200");
   }


   function Json_a_php()
   {

      return json_decode($this->data);
   }

   function mostrarComentarios()
   {

      $comentarios = $this->modeloComentarios->traerComentarios();
      $this->apiVistaHome->response($comentarios, "200");
   }
   function agregarComentario($params = [])
   {

      $body = json_decode(file_get_contents("php://input"));
      $comentario = $body->comentario;
      $puntajes = $body->puntaje;
      $id = $body->id;

      $this->modeloComentarios->guardarComentario($comentario, $puntajes, $id);
   }
   function traerComentario($params = [])
   {

      $id = $params[':ID'];

      $comentario = $this->modeloComentarios->traerComentario($id);

      $this->apiVistaHome->response($comentario, "200");
   }
   function ordenarComentarios($params = [])
   {

     // echo "el params es " . $params[":orden"] . "";

      if ($params[':orden'] == ":ascendente") {

         $comentarios = $this->modeloComentarios->traerAscen();

         if (!empty($comentarios)) {
            $this->apiVistaHome->response($comentarios, "200");
         }
         else{
            echo "mal";
         }
        
      } elseif ($params[':orden'] == ":descendente") {

         $comentarios = $this->modeloComentarios->traerDescen();
         
        if(!empty($comentarios))  {
         $this->apiVistaHome->response($comentarios, "200");
        }
        else{
         $this->apiVistaHome->response("fracaso el encontrar los datos", "200");
        }

      } else {
         echo "  || LLego a la zona desconocida";
      }
   }
   function ordenarDescen()
   {
      $comentarios = $this->modeloComentarios->traerDescen();
      $this->apiVistaHome->response($comentarios, "200");
   }
   function ordenarAscen()
   {
      $comentarios = $this->modeloComentarios->traerAscen();
      $this->apiVistaHome->response($comentarios, "200");
   }
   public function borrarComentario($params = [])
   {
      $comentario_id = $params[':ID'];
      $comentario = $this->modeloComentarios->traerComentarioTablaid($comentario_id);

      // if ($comentario) {
      $this->modeloComentarios->borrarComentario($comentario_id);
      $this->apiVistaHome->response("comentario id=$comentario_id eliminada con éxito", 200);
      // } else {
      //     $this->apiVistaHome->response("comentario id=$comentario_id not found le salio mal", 404);
      //  }
   }
}
