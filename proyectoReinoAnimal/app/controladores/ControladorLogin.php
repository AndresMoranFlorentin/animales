
<?php
require_once "app/vistas/VistaAnimal.php";
require_once "app/vistas/VistaLogin.php";
require_once "app/modelos/ModeloLogin.php";
require_once "app/modelos/ModeloAnimal.php";
require_once "app/controladores/ControladorEspecie.php";
require_once "app/controladores/ControladorAnimal.php";
require_once "app/controladores/helperUser.php";
require_once "app/controladores/Controlador.php";

class ControladorLogin extends Controlador
{
     private $modelologin;
     private $vistalogin;
     private $modeloanimal;
     private $vistaanimal;
     private $controladorAnimal;
     private $helperUser;
     private $controladorEspecie;
     private $Controlador;
     
    public function __construct()
    {
        $this->modelologin = new ModeloLogin();
        $this->vistalogin = new VistaLogin();
        $this->modeloanimal = new ModeloAnimal();
        $this->vistaanimal = new VistaAnimal();
        $this->controladorAnimal = new ControladorAnimal();
        $this->helperUser = new helperUser();
        $this->controladorEspecie = new ControladorEspecie();
        $this->Controlador = new Controlador();
    }

    function form_registrarse($accion){

      if($accion=="registro_vista"){
        $this->vistalogin->registro_user();
      }
      elseif($accion=="registrarme"){
       
        $nombre=$_POST["name_user"];
        $mail=$_POST["mail"];
        $contraseña=password_hash($_POST["password"],PASSWORD_BCRYPT);
        $rol="usuario";

        $this->modelologin->cargar_nuevo_user($nombre,$mail,$contraseña,$rol);
       // $tabla_usuario = $this->modelologin->traerContraseña($mail);
       // $this->helperUser->iniciarSesion($tabla_usuario);
        $this->mostrarAdminAnimal();
      }

    }
    function Login()
    {

        if (!empty($_POST['mail']) && !empty($_POST['contraseña'])) {

            $email = $_POST['mail'];
            $contraseña = $_POST['contraseña'];
            $tabla_usuario = $this->modelologin->traerContraseña($email);

            if ($tabla_usuario && password_verify($contraseña, ($tabla_usuario['contrasenia']))) {

                $this->helperUser->iniciarSesion($tabla_usuario);

                if ($this->helperUser->es_Usuario()) {

                    $this->mostrarAdminAnimal();

                } elseif ($this->helperUser->es_Admin()) {

                    $this->controladorAnimal->mostrarAdministradorAnimal();

                } else {
                    header('location:' . BASE_URL . 'home');
                }
            } else {
                header('location:' . BASE_URL . 'home');
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
        $admin = $this->esAdmin_o_Usuario();

        $matrixAnimal = $this->modeloanimal->traerAnimales();

        $usuarios = $this->traeme_Los_Usuarios();

        $this->vistaanimal->mostrarTablaAdmin($matrixAnimal, $admin, $usuarios);
    }

    function mostrarAdminEspecie()
    {
        $logueado = $this->helperUser->checklogueo();

        if ($logueado) {
            $permiso = $this->Controlador->esAdmin_o_Usuario();

            $this->controladorEspecie->mostrarEspeciesAdmin($permiso);
        } else {

            header('location:' . BASE_URL . 'home');
        }
    }
    function mostrar_administracion_usuarios(){

        if($this->helperUser->es_Admin()){

            $usuarios = $this->traeme_Los_Usuarios();
            $this->vistalogin->mostrar_seccion_Admin($usuarios,"administrador");

        }
        elseif($this->helperUser->checklogueo()){
            $this->mostrarAdminAnimal();
        }
        else{
            header('location:' . BASE_URL . 'home');
        }
    }
    function User_a_Admin($id)
    {

        $usuario = "administrador";

        $this->modelologin->serUser_o_Admin($usuario, $id);

        header('location:' . BASE_URL . 'seccion_admin');
       
    }
    function Admin_a_User($id)
    {

        $usuario = "usuario";

        $this->modelologin->serUser_o_Admin($usuario, $id);
        header('location:' . BASE_URL . 'seccion_admin');
    }
    function borrar_Usuario($id)
    {
        $this->modelologin->borrarUser($id);
        header('location:' . BASE_URL . 'seccion_admin');
    }
}
