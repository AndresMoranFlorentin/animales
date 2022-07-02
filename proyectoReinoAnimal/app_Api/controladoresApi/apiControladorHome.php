<?php
require_once ("app/modelos/ModeloAnimal.php");
require_once ("app/modelos/ModeloComentarios.php");
require_once ("app_Api/vistasApi/apiVistaHome.php");
require_once ("app/modelos/ModeloEspecie.php");
class apiControladorHome {

    private $modeloAnimal;
    private $modeloEspecie;
    private $apiVistaHome;
    private $modeloComentarios;

    public function __construct()
    {

        $this->modeloAnimal=new ModeloAnimal();
        $this->modeloEspecie=new ModeloEspecie();
        $this->modeloComentarios=new ModeloComentarios();
        $this->apiVistaHome=new apiVistaHome();
        $this->data = file_get_contents("php://input"); 
    }
   function mostrarHome(){

      $animales=$this->modeloAnimal->traerAnimales();
      $this->apiVistaHome->response($animales,"200");

   }
   

   function Json_a_php(){ 

    return json_decode($this->data); 
 }  

   function mostrarComentarios(){

    $comentarios=$this->modeloComentarios->traerComentarios();
    $this->apiVistaHome->response($comentarios,"200");

 }
 function agregarComentario($params = []){

    $body = $this->Json_a_php();
    $comentarios = $body->comentario;
    $puntajes = $body->puntaje;
    
    $this->modeloComentarios->guardarComentario($comentarios, $puntajes);

    $this->mostrarComentarios();

 }
 public function borrarComentario($params = []) {
    $comentario_id = $params[':ID'];
    $comentario = $this->modeloComentarios->traerComentario($comentario_id);

    if ($comentario) {
        $this->modeloComentarios->borrarComentario($comentario_id);
        $this->apiVistaHome->response("Tarea id=$comentario_id eliminada con éxito", 200);
    }
    else 
        $this->apiVistaHome->response("Task id=$comentario_id not found", 404);
}

}
