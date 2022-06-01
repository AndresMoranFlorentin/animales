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
    function traerFormLogin()
    {

        $this->vista->mostrarLogin();
    }
    function Login()
    {

        if (!empty($_POST['nombre']) && !empty($_POST['email']) && !empty($_POST['contraseña'])) {

            //$Contraseña= password_hash($_POST['contraseña'], PASSWORD_BCRYPT);
            $email = $_POST['email'];
            $Contraseña = $_POST['contraseña'];
            $tabla_usuario = $this->modelo->traerContraseña($email);

            if ($tabla_usuario && password_verify($Contraseña, ($tabla_usuario['contrasenia']))) {
                //Guardo datos en el arreglo de sesion
                $_SESSION["logueado"] = true;
                $_SESSION["username"] = $email;
                $matrix = $this->modelo->traerAnimales();
                $this->vista->mostrarTablaAdmin($matrix);
            } else {
                echo "<h2>Acceso denegado</h2>";
            }
        } else {
            $this->vista->mostrarLogin();
        }
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
    {
        $fila = $this->modelo->traerUnaFila($id);
        $this->vista->mostrarEdicionAnimal($fila);
        //primero tiene que llamar a un formulario de tpl, y que cargue todos los datos necesarios para editar
        //luego los enviara al ruteo nuevamente y esta ves insertara la informacion en el id que se viene arrastrando
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
