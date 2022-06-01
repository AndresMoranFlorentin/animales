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
    function Traer_form_login()
    {

        $this->vista->Mostrar_login();
    }
    function Login()
    {

        if (!empty($_POST['nombre']) && !empty($_POST['email']) && !empty($_POST['contraseña'])) {

            //$Contraseña= password_hash($_POST['contraseña'], PASSWORD_BCRYPT);
            $Email = $_POST['email'];
            $Contraseña= $_POST['contraseña'];
            $tabla_usuario = $this->modelo->traerContraseña($Email);

            if ($tabla_usuario && password_verify($Contraseña, ($tabla_usuario['contrasenia']))) {
                //Guardo datos en el arreglo de sesion
                $_SESSION["logueado"] = true;
                $_SESSION["username"] = $Email;
                $Matrix = $this->modelo->traerAnimales();
                $this->vista->mostrarTablaAdmin($Matrix);
            } else {
                echo "<h2>Acceso denegado</h2>";
            }
        } else {
            $this->vista->Mostrar_login();
        }
    }
    function MostrarAnimalesAccesoPublico()
    {
        $Matrix = $this->modelo->traerAnimales();
        $this->vista->mostrarTablaNoAdmin($Matrix);
    }

    function Borrar($id)
    {

        $this->modelo->Borrar_fila($id);
        $Matrix = $this->modelo->traerAnimales();
        $this->vista-> mostrarTablaAdmin($Matrix);
    }
    function Preparar($id)
    {
        $fila = $this->modelo->TraerUnaFila($id);
        $this->vista->Mostrar_edicion($fila);
        //primero tiene que llamar a un formulario de tpl, y que cargue todos los datos necesarios para editar
        //luego los enviara al ruteo nuevamente y esta ves insertara la informacion en el id que se viene arrastrando
    }
    function Editar_Fila()
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
            $this->vista->Mostrar_error();
            die();
        }
        $nombre = $_POST['nombre'];
        $descripcion = $_POST['descripcion'];
        $alimento = $_POST['alimentacion'];
        $habitat = $_POST['habitat'];
        $especie = $_POST['especie'];
        $extinto = $_POST['extinto'];
        $id = $_POST['id'];
        $this->modelo->Actualizar_fila($nombre, $descripcion, $alimento, $habitat, $especie, $extinto, $id);
        $Matrix = $this->modelo->traerAnimales();
        $this->vista-> mostrarTablaAdmin($Matrix);
    }
    function agregar_datos_a_tabla_animal()
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


        $Matrix = $this->modelo->traerAnimales();
        $this->vista-> mostrarTablaAdmin($Matrix);
    }
}
