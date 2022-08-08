<?php

require_once("app/modelos/ModeloAnimal.php");
require_once("app_Api/vistasApi/apiVista.php");

class apiControladorAnimal
{

   private $modeloAnimal;
   private $apiVista;

   public function __construct()
   {
      $this->modeloAnimal = new ModeloAnimal();
      $this->apiVista = new apiVista();
   }

   function encontrarPalabraNombre($params = [])
   {

         if ($params[":accion"]=='nombre') {

            $palabra ="%".$params[":palabra"]."%";
            $animales = $this->modeloAnimal->buscarPalabraAnimal("nombre", $palabra);
            $this->apiVista->response($animales, 200);

         } elseif ($params[":accion"]=="descripcion") {

            $palabra ="%".$params[":palabra"]."%";
            $animales = $this->modeloAnimal->buscarPalabraAnimal("descripcion", $palabra);
            $this->apiVista->response($animales, 200);

         } elseif ($params[":accion"]=="alimentacion") {

            $palabra ="%".$params[":palabra"]."%";
            $animales = $this->modeloAnimal->buscarPalabraAnimal("alimentacion", $palabra);
            $this->apiVista->response($animales, 200);

         } else {
            $this->apiVista->response("el parametro accion no es valido", 204);
         }
   
   }
}
