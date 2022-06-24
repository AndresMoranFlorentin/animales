<?php
require_once ("app/modelos/ModeloEspecie.php");
require_once ("app_Api/vistasApi/apiVistaHome.php");

class apiControladorEspecie{

    private $modeloEspecie;
    private $apiVistaHome;

    public function __construct()
    {

        $this->modeloEspecie=new ModeloEspecie();
        $this->apiVistaHome=new apiVistaHome();
    }
    
function generarNuevaEspecies(){
    
    if (
        !isset($_POST['nombreEspecie'])
        && !isset($_POST['vertebrado'])
    ) {

        die();
    }
    $nombreEspecie = $_POST['nombreEspecie'];
    $vertebrado = $_POST['vertebrado'];
    $this->modeloEspecie->agregarInfoEspecies($nombreEspecie, $vertebrado);

}

}
?>