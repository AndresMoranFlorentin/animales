<?php
require_once "vistas/VistaEspecie.php";
require_once "modelos/ModeloEspecie.php";
//echo "LLegaste hasta el controlador y el id es =".$id." ";

class ControladorEspecie
{


    public function __construct()
    {
        $this->modelo = new ModeloEspecie();
        $this->vista = new VistaEspecie();
    }
    function mostrarEspecies(){

  

    }
   
    
}
?>