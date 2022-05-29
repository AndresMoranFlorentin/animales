<?php
require_once "VistaAnimal.php";
require_once "ModeloAnimal.php";
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

    function Traer_tabla()
    {

        $Matrix = $this->modelo->TraerDatosMSQL();
        $this->vista->Mostrar_Tabla($Matrix);
    }

    function Borrar($id)
    {

        $this->modelo->Borrar_fila($id);
        $Matrix = $this->modelo->TraerDatosMSQL();
        $this->vista->Mostrar_Tabla($Matrix);
    }
    function Preparar($id)
    {
        $fila = $this->modelo->TraerUnaFila($id);
        $this->vista->Mostrar_edicion($fila);
        //primero tiene que llamar a un formulario de tpl, y que cargue todos los datos necesarios para editar
        //luego los enviara al ruteo nuevamente y esta ves insertara la informacion en el id que se viene arrastrando
        /*$this->modelo->Actualizar_fila($id);
        $Matrix = $this->modelo->TraerDatosMSQL();
        $this->vista->Mostrar_Tabla($Matrix);*/
    }
    function Editar_Fila()
    {
       /* if (
            !isset($_POST['nombre'])
            || !isset($_POST['descripcion'])
            || !isset($_POST['alimentacion'])
            || !isset($_POST['habitat'])
            || !isset($_POST['especie'])
            || !isset($_POST['extinto'])
            || !isset($_POST['id_animales'])
        ) {
            $this->vista->Mostrar_error();
            die();
        }*/
        $nombre = $_POST['nombre'];
        $descripcion = $_POST['descripcion'];
        $alimento = $_POST['alimentacion'];
        $habitat = $_POST['habitat'];
        $especie = $_POST['especie'];
        $extinto = $_POST['extinto'];
        $id = $_POST['id'];
        $this->modelo->Actualizar_fila($nombre, $descripcion, $alimento, $habitat, $especie, $extinto, $id);
        $Matrix = $this->modelo->TraerDatosMSQL();
        $this->vista->Mostrar_Tabla($Matrix);
    }
    function Agregar_datos()
    {
        //$nombre,$descripcion, $alimento,$habitat,$especie,$extinto
        if (
            !isset($_POST['nombre'])
            || !isset($_POST['descripcion'])
            || !isset($_POST['alimentacion'])
            || !isset($_POST['habitat'])
            || !isset($_POST['especie'])
            || !isset($_POST['extinto'])
        ) {

            $this->vista->Mostrar_error();
            die();
        }
        $nombre = $_POST['nombre'];
        $descripcion = $_POST['descripcion'];
        $alimento = $_POST['alimentacion'];
        $habitat = $_POST['habitat'];
        $especie = $_POST['especie'];
        $extinto = $_POST['extinto'];
        $this->modelo->Agregar_info($nombre, $descripcion, $alimento, $habitat, $especie, $extinto);


        $Matrix = $this->modelo->TraerDatosMSQL();
        $this->vista->Mostrar_Tabla($Matrix);
    }
}
