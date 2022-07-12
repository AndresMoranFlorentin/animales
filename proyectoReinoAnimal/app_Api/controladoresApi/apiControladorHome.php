<?php
require_once("app/modelos/ModeloAnimal.php");
require_once("app/modelos/ModeloComentarios.php");
require_once("app_Api/vistasApi/apiVistaHome.php");
require_once("app/modelos/ModeloEspecie.php");
class apiControladorHome
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
  
    
  
   function mostrarHome()
   {
      $animales = $this->modeloAnimal->traerAnimales();
      $this->apiVistaHome->response($animales, "200");
   }


   function Json_a_php()
   {
      return json_decode($this->data);
   }
}
