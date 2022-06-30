<?php
require_once "app/vistas/VistaEspecie.php";
require_once "app/modelos/ModeloEspecie.php";
require_once "app/controladores/helperUser.php";
require_once "app/controladores/Controlador.php";

class ControladorEspecie extends Controlador
{


    public function __construct()
    {
        $this->modelo = new ModeloEspecie();
        $this->vista = new VistaEspecie();
        $this->helper = new helperUser();
    }
    function mostrarEspeciesAdmin($permiso)
    {
        $habilito = 'acceso privado';
        $matrixEspecies = $this->modelo->traerEspecies();
        $this->vista->mostrarEspecies($matrixEspecies, $habilito, $permiso);
    }

    function mostrarEspeciesAccesoPublico()
    {
        $habilito ='acceso Publico';
        $permiso="publico";
        $matrixEspecies = $this->modelo->traerEspecies();
        $this->vista->mostrarEspecies($matrixEspecies, $habilito,$permiso);
    }
    function borrarEspecie($id)
    {
        $coincidenciaIdEspecie = $this->modelo->traerIdIgualEspecie($id);

      $permiso=$this->esAdmin_o_Usuario();

        if (empty($coincidenciaIdEspecie[0])) {
            $this->modelo->borrarFilaEspecie($id);
            $this->mostrarEspeciesAdmin($permiso);
        } else {

            $this->vista->mostrarErrorEjecucionBorrar($coincidenciaIdEspecie);
        }
    }
    function mostrarAgregarEspecies()
    {
        $tipoDeForm = 'especies';
        $especies = $this->modelo->traerEspecies();
        $this->vista->mostrarFormularioAgregar($tipoDeForm, $especies);
    }
    function prepararEspecie($id)
    {
        $modeloEspecie = $this->modelo->traerFilaEspecie($id);
        $editar = 'editar especie';
        $this->vista->mostrarEdicionEspecie($editar, $modeloEspecie);
    }
    function editarFilaEspecie()
    {
     
            $permiso =$this->esAdmin_o_Usuario();
    
        if (
            !isset($_POST['nombreEspecie'])
            && !isset($_POST['vertebrado'])
        ) {

            $this->vista->mostrarError();
            die();
        }
        $nombreEspecie = $_POST['nombreEspecie'];
        $vertebrado = $_POST['vertebrado'];
        $id = $_POST['id'];

        $this->modelo->actualizarEspecie($nombreEspecie, $vertebrado, $id);
      
        $this->mostrarEspeciesAdmin($permiso);
    }
    function AgregarEspecies()
    {
      
            $permiso =$this->esAdmin_o_Usuario();

        if (
            !isset($_POST['nombreEspecie'])
            && !isset($_POST['vertebrado'])
        ) {

            $this->vista->mostrarError();
            die();
        }
        $nombreEspecie = $_POST['nombreEspecie'];
        $vertebrado = $_POST['vertebrado'];
        $this->modelo->agregarInfoEspecies($nombreEspecie, $vertebrado);
       
        $this->mostrarEspeciesAdmin($permiso);
    }
}
