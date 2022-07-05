<?php
/* Smarty version 4.0.0, created on 2022-07-06 00:04:02
  from 'C:\xampp\htdocs\web2\animales\proyectoReinoAnimal\app\template\template_vue\seccionComentario.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_62c4b552c8fd08_18327489',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '44d26730d596914e58a36c5a9f5365690c4c364a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\animales\\proyectoReinoAnimal\\app\\template\\template_vue\\seccionComentario.tpl',
      1 => 1657058342,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:app/template/formularioComentario.tpl' => 1,
  ),
),false)) {
function content_62c4b552c8fd08_18327489 (Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="container-fluid">
        <section id="template-vue-comentarios">
            
             <div class="row">
                <div class="col-8">
                   <h2>Comentarios</h2>
                </div>
                <div class="col">
                   <h2>Puntaje</h2>
                </div>
                 <div v-if ="permiso_logueado == administrador" class="col">
                   <h2>Borrar</h2>
                </div>

             </div>
             <div v-for = "comentar in comentarios" class="row">
                <div class="col-8">
                   <p>{{ comentar.comentario }}</p>
                </div>
                <div class="col">
                   <p>{{ comentar.puntaje }}</p>
                </div>
                <div class="col">
                    <a :data_id="comentar.id" v-on:click="borrar"  href="#">Eliminar</a>
                </div>
               
             </div> 
        </section>
    </div>


<?php $_smarty_tpl->_subTemplateRender("file:app/template/formularioComentario.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
