<?php
require_once ("app/modelos/ModeloAnimal.php");
require_once ("app_Api/vistasApi/apiVistaHome.php");
require_once ("app/modelos/ModeloEspecie.php");
class apiControladorHome {

    private $modeloAnimal;
    private $modeloEspecie;
    private $apiVistaHome;

    public function __construct()
    {

        $this->modeloAnimal=new ModeloAnimal();
        $this->modeloEspecie=new ModeloEspecie();
        $this->apiVistaHome=new apiVistaHome();
    }
   function mostrarHome(){

      $animales=$this->modeloAnimal->traerAnimales();
      $especies=$this->modeloEspecie->traerEspecies();
      $this->apiVistaHome->verHome($animales,$especies,"200");

   }

}


?>