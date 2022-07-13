<?php
require_once("app/modelos/ModeloAnimal.php");
require_once("app_Api/vistasApi/apiVistaHome.php");
require_once("app_Api/controladoresApi/apiControladorHome.php");
require_once("app/modelos/ModeloAnimal.php");
require_once("app/modelos/ModeloComentarios.php");
require_once("app_Api/vistasApi/apiVistaHome.php");
require_once("app/modelos/ModeloEspecie.php");
class apiControladorAnimal
{

   private $modeloAnimal;
   private $apiVistaHome;
   private $data;
   public function __construct()
   {
      $this->modeloAnimal = new ModeloAnimal();
      $this->apiVistaHome = new apiVistaHome();
      $this->data = file_get_contents("php://input");
   }

   function borrarAnimal($params = [])
   {

      if (!empty($params[':ID'])) {

         $animal_id = $params[':ID'];
         $animales = $this->modeloAnimal->ComprueboQueExiste($animal_id);

         if ($animales) {
            $this->modeloAnimal->borrarFilaAnimal($animal_id);
            $this->apiVistaHome->response("se elimino con exito", 200);
         } else {
            $this->apiVistaHome->response("No existe ese id en animales 
         o no ingreso correctamente el parametro :ID", 404);
         }
      } else {
         $this->apiVistaHome->response("No existe ese id en animales 
         o no ingreso correctamente el parametro :ID", 404);
      }
   }
   function encontrarPalabraNombre($params = [])
   {
      if (!empty($params[":accion"])) {

         // echo "Accion = ".$params[":accion"];
         //echo "     Palabra = ".$params[":palabra"];
         if ($params[":accion"] == 'nombre') {

            $palabra = "%" . $params[":palabra"] . "%";

            $animales = $this->modeloAnimal->buscarPalabraAnimal("nombre", $palabra);
            $this->apiVistaHome->response($animales, 200);
         } elseif ($params[":accion"] == "descripcion") {

            $palabra = "%" . $params[":palabra"] . "%";

            $animales = $this->modeloAnimal->buscarPalabraAnimal("descripcion", $palabra);
            $this->apiVistaHome->response($animales, 200);
         } elseif ($params[":accion"] == "alimentacion") {

            $palabra = "%" . $params[":palabra"] . "%";

            $animales = $this->modeloAnimal->buscarPalabraAnimal("alimentacion", $palabra);
            $this->apiVistaHome->response($animales, 200);
         } else {
            //echo"HOLA";
            $this->apiVistaHome->response("el parametro accion no es valido", 204);
         }
      } else {
         //echo"HOLLA";
         $this->apiVistaHome->response("el parametro accion no pudo ser encontrado", 404);
      }
   }
}
