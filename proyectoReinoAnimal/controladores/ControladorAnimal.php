<?php
require_once "vistas/VistaAnimal.php";
require_once "modelos/ModeloAnimal.php";
require_once "modelos/ModeloEspecie.php";
//echo "LLegaste hasta el controlador y el id es =".$id." ";

class ControladorAnimal
{

    private $modelo;
    private $vista;

    public function __construct()
    {
        $this->modelo = new ModeloAnimal();
        $this->vista = new VistaAnimal();
        
    }
    function mostrarAnimalesAccesoPublico()
    {
        $matrix = $this->modelo->traerAnimales();
        $this->vista->mostrarTablaNoAdmin($matrix);
    }

    function borrar($id)
    {

        $this->modelo->borrarFilaAnimal($id);
        $matrix = $this->modelo->traerAnimales();
        $this->vista->mostrarTablaAdmin($matrix);
    }
    function preparar($id)
    {  echo "llegaste a la funcion preparar ";
         $modeloespecie= New ModeloEspecie();
        $fila = $this->modelo->traerUnaFila($id);
        $especie=$modeloespecie->traerEspecies();
        var_dump($fila);
        echo "                   ||||||                       ";
        var_dump($especie);
        $editar='editar animal';
        $this->vista->mostrarEdicionAnimal($fila,$especie,$editar);
     }
    function editarFila()
    {  
        echo "llegaste a editar fila";
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
        }
        $nombre = $_POST['nombre'];
        $descripcion = $_POST['descripcion'];
        $alimento = $_POST['alimentacion'];
        $habitat = $_POST['habitat'];
        $especie = $_POST['especie'];
        $extinto = $_POST['extinto'];
        $id = $_POST['id'];
        $this->modelo->actualizarFila($nombre, $descripcion, $alimento, $habitat, $especie, $extinto, $id);
        $matrix = $this->modelo->traerAnimales();
        $this->vista->mostrarTablaAdmin($matrix);
    }
    function mostrarAgregarAnimales(){
        $modeloEspecie= new ModeloEspecie();
        $especies=$modeloEspecie->traerEspecies();
        $tipoDeForm='animales';
        $this->vista->mostrarFormularioAgregar($tipoDeForm,$especies);

    }
    function agregarDatosTablaAnimal()
    {
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


        $matrix = $this->modelo->traerAnimales();
        $this->vista->mostrarTablaAdmin($matrix);
    }
}
