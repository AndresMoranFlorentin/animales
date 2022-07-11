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
        $this->vistaAnimal = new VistaAnimal();
        $this->helperUser = new helperUser();
        $this->modeloComen=new ModeloComentarios();
    }
    function comentarItem($id){

      if($this->helperUser->checklogueo()){
         $permiso='usuario';
         $this->vista->mostrarSeccionComentario($id,$permiso);

      }
      else{
        header('location: '.BASE_URL.'home');

      }
   
    }
    function mostrarSeccionComentario($id){

      if($this->helperUser->es_Usuario()){
           $permiso='usuario';
           $this->vista->mostrarseccionComentario($id,$permiso);
      }
      elseif($this->helperUser->es_Admin()) {
        $permiso='administrador';
        $this->vista->mostrarseccionComentario($id,$permiso);
      }
      else{
          header("location: ".BASE_URL."loguearse");
      }


    }
    function mostrarTodosLosComentarios()
    {
      if ($this->helperUser->es_Usuario()) {
  
        $this->vista->mostrarApartadoComentarios();
  
      }
       elseif ($this->helperUser->es_Admin()) {
  
        $this->vista->mostrarApartadoComentarios();
      } 
      else {
        header('location:' . BASE_URL . 'home');
      }
    }
}