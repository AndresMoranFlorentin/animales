<?php
require_once "app/vistas/VistaAnimal.php";
require_once "app/vistas/VistaComentario.php";

require_once "app/modelos/ModeloAnimal.php";
require_once "app/modelos/ModeloEspecie.php";
require_once "app/modelos/ModeloComentarios.php";
require_once "app/modelos/ModeloLogin.php";

require_once "app/controladores/helperUser.php";
require_once "app/controladores/ControladorAnimal.php";
require_once "app/controladores/ControladorEspecie.php";
require_once "app_Api/controladoresApi/apiControladorHome.php";


class ControladorComentarios extends Controlador{

    private $modelo;
    private $vista;
    private $helperUser;

    public function __construct()
    {
        $this->modelo = new ModeloAnimal();
        $this->vista = new VistaComentario();
        $this->helperUser = new helperUser();
        $this->modeloComen=new ModeloComentarios();
    }
    function comentarItem($id){

      if($this->helperUser->checklogueo()){

         $this->vista->mostrarSeccionComentario($id);

      }
      else{
        echo "deberia imprimer";
      }
   
    }
    /*function puntaje_ascen_o_descen(){

      if(isset($_POST["mayor_a_menor"]) && $_POST["mayor_a_menor"]=="menor"){

        $comentarios=$this->modeloComen->traerDescen();
        //$this->vistaAnimal

      }
       

    }*/

}