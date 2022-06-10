<?php
require_once "vistas/VistaEspecie.php";
require_once "modelos/ModeloEspecie.php";
require_once "controladores/helperUser.php";

class ControladorEspecie
{


    public function __construct()
    {
        $this->modelo = new ModeloEspecie();
        $this->vista = new VistaEspecie();
        $this->helper = new helperUser();
    }
    function mostrarEspeciesAdmin()
    {
        $validacion = $this->helper->checklogueo();
        
        if ($validacion) {
            $habilito = 'acceso privado';
            $matrixEspecies = $this->modelo->traerEspecies();
            $this->vista->mostrarEspecies($matrixEspecies, $habilito);

        } else {

            echo "resulto falso";
        }
    }

    function mostrarEspeciesAccesoPublico()
    {
        $habilito = 'acceso Publico';
        $matrixEspecies = $this->modelo->traerEspecies();
        $this->vista->mostrarEspecies($matrixEspecies, $habilito);
    }
    function borrarEspecie($id)
    {
        $coincidenciaIdEspecie = $this->modelo->traerIdIgualEspecie($id);

        if (empty($coincidenciaIdEspecie[0])) {

            $this->modelo->borrarFilaEspecie($id);
            $this->mostrarEspeciesAdmin();
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
        $this->mostrarEspeciesAdmin();
    }
    function AgregarEspecies()
    {

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
        $this->mostrarEspeciesAdmin();
    }
}
