<?php
require_once "app/vistas/VistaAnimal.php";
require_once "app/modelos/ModeloAnimal.php";
require_once "app/modelos/ModeloEspecie.php";
require_once "app/controladores/helperUser.php";
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

    }
}