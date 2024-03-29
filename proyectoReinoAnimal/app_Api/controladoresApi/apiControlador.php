<?php
require_once("app/modelos/ModeloAnimal.php");
require_once("app/modelos/ModeloComentarios.php");
require_once("app_Api/vistasApi/apiVista.php");
require_once("app/modelos/ModeloEspecie.php");
class apiControlador
{
    private $modeloAnimal;
    private $apiVista;
    private $data;

    public function __construct()
    {
      $this->modeloAnimal = new ModeloAnimal();
      $this->apiVista = new apiVista();
      $this->data = file_get_contents("php://input");
    }
  
   function mostrarHome()
   {
      $animales = $this->modeloAnimal->traerAnimales();
      $this->apiVista->response($animales, 200);
   }

   function Json_a_php()
   {
      return json_decode($this->data);
   }
}
