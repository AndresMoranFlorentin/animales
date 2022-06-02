<?php
require_once "vistas/VistaAnimal.php";
require_once "modelos/ModeloAnimal.php";
require_once "modelos/ModeloEspecie.php";
//echo "LLegaste hasta el controlador y el id es =".$id." ";

class Controlador_Animal
{

    private $modelo;
    private $vista;

    public function __construct()
    {
        $this->modelo = new Modelo_animal();
        $this->vista = new Vista_Animal();
        
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
    {   $modeloespecie= New ModeloEspecie();
        $fila = $this->modelo->traerUnaFila($id);
        
        $especie=$modeloespecie->traerEspecies();
        $this->vista->mostrarEdicionAnimal($fila,$especie);
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
    function agregarDatosTablaAnimal()
    {
        //$nombre,$descripcion, $alimento,$habitat,$especie,$extinto
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
