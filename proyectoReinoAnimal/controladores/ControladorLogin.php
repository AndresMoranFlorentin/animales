
<?php
require_once "vistas/VistaAnimal.php";
require_once "vistas/VistaLogin.php";
require_once "modelos/ModeloLogin.php";
require_once "modelos/ModeloAnimal.php";
require_once "controladores/ControladorEspecie.php";


require_once "helperUser.php";
class ControladorLogin
{

    public function __construct()
    {
        $this->modelologin = new ModeloLogin();
        $this->vistalogin = new VistaLogin();
        $this->modeloanimal = new ModeloAnimal();
        $this->vistaanimal = new VistaAnimal();
        $this->helperUser = new helperUser();
        $this->controladorEspecie = new ControladorEspecie();
    }
    function Login()
    {

        if (!empty($_POST['email']) && !empty($_POST['contraseña'])) {

            //$Contraseña= password_hash($_POST['contraseña'], PASSWORD_BCRYPT);
            $email = $_POST['email'];
            $contraseña = $_POST['contraseña'];
            $tabla_usuario = $this->modelologin->traerContraseña($email);

            if ($tabla_usuario && password_verify($contraseña, ($tabla_usuario['contrasenia']))) {

                $this->helperUser->iniciarSesion($tabla_usuario);
                $this->mostrarAdminAnimal();
            } else {
                header('location:' . BASE_URL . 'loguearse');
            }
        } else {
            $this->vistalogin->mostrarLogin();
        }
    }
    function traerFormLogin()
    {

        $this->vistalogin->mostrarLogin();
    }
    function desLoguearse()
    {
        $this->helperUser->logout();
        header('location:' . BASE_URL . 'home');
    }

    function mostrarAdminAnimal()
    {

        $validacion = $this->helperUser->checklogueo();
        if ($validacion) {
            $matrix = $this->modeloanimal->traerAnimales();
            $this->vistaanimal->mostrarTablaAdmin($matrix);
        } else {
            header('location:' . BASE_URL . 'loguearse');
        }
    }
    function mostrarAdminEspecie()
    {
        $validacion = $this->helperUser->checklogueo();
        if ($validacion) {
            $this->controladorEspecie->mostrarEspeciesAdmin();
        } else {
            header('location:' . BASE_URL . 'loguearse');
        }
    }
}
