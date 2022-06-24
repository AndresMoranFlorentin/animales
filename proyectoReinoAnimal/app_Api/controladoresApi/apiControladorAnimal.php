<?php
require_once ("app/modelos/ModeloAnimal.php");
require_once ("app_Api/vistasApi/apiVistaHome.php");
class apiControladorAnimal{

    private $modeloAnimal;
    private $apiVistaHome;

    public function __construct()
    {

        $this->modeloAnimal=new ModeloAnimal();
        $this->apiVistaHome=new apiVistaHome();
    }

    function borrarAnimal($params=[]){

        $animal_id = $params[':ID'];

         $this->modeloAnimal->borrarFilaAnimal($animal_id);

    }
}
?>