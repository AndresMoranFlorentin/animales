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
    function mostrarEspeciesAdmin()
    {
        $matrixEspecies = $this->modelo->traerEspecies();
        $this->vista->mostrarEspecies($matrixEspecies);
    }

    function borrarEspecie($id)
    {
        $coincidenciaIdEspecie = $this->modelo->traerIdIgualEspecie($id);
        print_r($coincidenciaIdEspecie);
       
        if(empty($coincidenciaIdEspecie[0])){
            
        $this->modelo->borrarFilaEspecie($id);
        $this->mostrarEspeciesAdmin();
           
        } else  {

            $this->vista->mostrarErrorEjecucionBorrar($coincidenciaIdEspecie);
            
        }
    }
 }