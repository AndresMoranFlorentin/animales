<?php
require_once "app/vistas/VistaAnimal.php";
require_once "app/modelos/ModeloAnimal.php";
require_once "app/modelos/ModeloEspecie.php";
require_once "app/controladores/helperUser.php";
require_once "app/controladores/ControladorAnimal.php";
require_once "app/controladores/ControladorEspecie.php";
require_once "app_Api/controladoresApi/apiControlador.php";
require_once "app/modelos/ModeloLogin.php";

//echo "LLegaste hasta el controlador y el id es =".$id." ";

class Controlador
{
    
    function esAdmin_o_Usuario() {

        $helperUser = new helperUser();
        $validacion =$helperUser->checklogueo();
        $admin =$helperUser->es_Admin();
        $usuario =$helperUser->es_Usuario();

        if ($validacion && $admin) {
            $permiso = "administrador";
        }
        elseif ($validacion && $usuario){
            $permiso = "usuario";
        }
       
      return $permiso;
    }

    function mostrarHome(){
        $controladorAnimal=new ControladorAnimal();
        $controladorEspecie=new ControladorEspecie();
        $controladorAnimal->mostrarAnimalesAccesoPublico();
        $controladorEspecie->mostrarEspeciesAccesoPublico();
    }

    function traeme_Los_Usuarios(){
        
        $modeloLogin=new ModeloLogin();
        $usuarios=$modeloLogin->traer_Usuarios();
        
        return $usuarios;
    }
}