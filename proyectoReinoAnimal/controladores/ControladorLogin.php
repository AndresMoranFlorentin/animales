
<?php
require_once "vistas/VistaAnimal.php";
require_once "vistas/VistaLogin.php";
require_once "modelos/ModeloLogin.php";
require_once "modelos/ModeloAnimal.php";
class ControladorLogin 
{

    public function __construct()
    {
        $this->modelologin = new ModeloLogin();
        $this->vistalogin = new VistaLogin();
        $this->modeloanimal = new Modelo_animal();
        $this->vistaanimal = new Vista_Animal();
    }
    function traerFormLogin()
    {

        $this->vistaanimal->mostrarLogin();
    }
    function Login()
    {

        if (!empty($_POST['nombre']) && !empty($_POST['email']) && !empty($_POST['contraseña'])) {

            //$Contraseña= password_hash($_POST['contraseña'], PASSWORD_BCRYPT);
            $email = $_POST['email'];
            $contraseña = $_POST['contraseña'];
            $tabla_usuario = $this->modelologin->traerContraseña($email);
            if ($tabla_usuario && password_verify($contraseña, ($tabla_usuario['contrasenia']))) {
                session_start();
                $_SESSION["logueado"] = true;
                $_SESSION["username"] = $email;
                $matrix = $this->modeloanimal->traerAnimales();
                $this->vistaanimal->mostrarTablaAdmin($matrix);
            } else {
                echo "<h2>Acceso denegado</h2>";
            }
        } else {
            $this->vistalogin->mostrarLogin();
        }
    }
}