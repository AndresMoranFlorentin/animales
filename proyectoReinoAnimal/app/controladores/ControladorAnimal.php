<?php
require_once "app/vistas/VistaAnimal.php";
require_once "app/modelos/ModeloAnimal.php";
require_once "app/modelos/ModeloEspecie.php";
require_once "app/controladores/Controlador.php";
require_once "app/controladores/helperUser.php";
//echo "LLegaste hasta el controlador y el id es =".$id." ";

class ControladorAnimal extends Controlador
{

    private $modelo;
    private $vista;
    private $helperUser;
    private $modeloEspecie;

    public function __construct()
    {
        $this->modelo = new ModeloAnimal();
        $this->vista = new VistaAnimal();
        $this->helperUser = new helperUser();
        $this->modeloEspecie = new ModeloEspecie();
    }
    function mostrarAnimalesAccesoPublico()
    {
        $matrix = $this->modelo->traerAnimales();
        $this->vista->mostrarTablaNoAdmin($matrix);
    }


    function borrar($id)
    {
        if ($this->helperUser->checklogueo()) {
            $this->modelo->borrarFilaAnimal($id);
            $matrix = $this->modelo->traerAnimales();
            $permiso = $this->esAdmin_o_Usuario();

            $usuarios = $this->traeme_Los_Usuarios();
            $this->vista->mostrarTablaAdmin($matrix, $permiso, $usuarios);
        } else {

            header('location:' . BASE_URL . 'home');
        }
    }


    function preparar($id)
    {
        if ($this->helperUser->checklogueo()) {


            $fila = $this->modelo->traerUnaFila($id);
            $especie = $this->modeloEspecie->traerEspecies();
            $editar = 'editar animal';
            $this->vista->mostrarEdicionAnimal($fila, $especie, $editar);
        } else {

            header('location:' . BASE_URL . 'home');
        }
    }

    function editarFila()
    {

        if (
            !isset($_POST['nombre'])
            && !isset($_POST['descripcion'])
            && !isset($_POST['alimentacion'])
            && !isset($_POST['habitat'])
            && !isset($_POST['especie'])
            && !isset($_POST['extinto'])
            && !isset($_POST['id_animales'])
        ) {

            $this->vista->mostrarError();
            die();
        } else {
            $nombre = $_POST['nombre'];
            $descripcion = $_POST['descripcion'];
            $alimento = $_POST['alimentacion'];
            $habitat = $_POST['habitat'];
            $especie = $_POST['especie'];
            $extinto = $_POST['extinto'];
            $id = $_POST['id'];

            $this->modelo->actualizarFila($nombre, $descripcion, $alimento, $habitat, $especie, $extinto, $id);
            $matrix = $this->modelo->traerAnimales();
            $permiso = $this->esAdmin_o_Usuario();
            $usuarios = $this->traeme_Los_Usuarios();
            $this->vista->mostrarTablaAdmin($matrix, $permiso, $usuarios);
        }
    }


    function mostrarAdministradorAnimal()
    {

        $validacion = $this->helperUser->es_Admin();

        if ($validacion) {
            $admin = "administrador";
            $matrix = $this->modelo->traerAnimales();
            $usuarios = $this->traeme_Los_Usuarios();
            $this->vista->mostrarTablaAdmin($matrix, $admin, $usuarios);
        } else {

            header('location:' . BASE_URL . 'home');
        }
    }
    function mostrarAgregarAnimales()
    {
        if ($this->helperUser->checklogueo()) {

            $especies = $this->modeloEspecie->traerEspecies();
            $tipoDeForm = 'animales';
            $this->vista->mostrarFormularioAgregar($tipoDeForm, $especies);
        } else {
            header('location:' . BASE_URL . 'home');
        }
    }

    function agregarDatosTablaAnimal()
    {

        if ($this->helperUser->checklogueo()) {
            if (
                !isset($_POST['nombre'])
                && !isset($_POST['descripcion'])
                && !isset($_POST['alimentacion'])
                && !isset($_POST['habitat'])
                && !isset($_POST['especie'])
                && !isset($_POST['extinto'])
            ) {

                $this->vista->mostrarError();
                die();
            }
            $nombre = $_POST['nombre'];
            $descripcion = $_POST['descripcion'];
            $alimento = $_POST['alimentacion'];
            $habitat = $_POST['habitat'];
            $especie = $_POST['especie'];
            $extinto = $_POST['extinto'];
            $this->modelo->agregarInfoAnimal($nombre, $descripcion, $alimento, $habitat, $especie, $extinto);

            $permiso = $this->esAdmin_o_Usuario();

            $matrix = $this->modelo->traerAnimales();
            $usuarios = $this->traeme_Los_Usuarios();
            $this->vista->mostrarTablaAdmin($matrix, $permiso, $usuarios);
        } else {
            header('location:' . BASE_URL . 'home');
        }
    }
}
    /*  function buscarAnimal()
    {

        if (empty($_POST["animal"]) && empty($_POST["especie"])) {

            $animal = $_POST["animal"];
            $especie = $_POST["especie"];

            $busqueda = $this->modelo->busquedaDelAnimal($animal, $especie);

            if (isset($busqueda[0])) {
                $matrixAnimales = $this->modelo->traerAnimales();
                $valor = "si";
                $this->vista->mostrarBusquedaObtenida($busqueda, $valor, $matrixAnimales);
            } else {
                $matrixAnimales = $this->modelo->traerAnimales();
                $valor = "no";
                $this->vista->mostrarBusquedaObtenida($busqueda, $valor, $matrixAnimales);
            }
        }
        else{

            header('location:' . BASE_URL . 'animalesAdmin');

        }
    }*/
