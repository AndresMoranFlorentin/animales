<?php
/* Smarty version 4.0.0, created on 2022-07-02 15:56:44
  from 'C:\xampp\htdocs\web2\animales\proyectoReinoAnimal\app\template\template_vue\seccionComentario.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_62c04e9c55ea82_84131840',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '44d26730d596914e58a36c5a9f5365690c4c364a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\animales\\proyectoReinoAnimal\\app\\template\\template_vue\\seccionComentario.tpl',
      1 => 1656770198,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:app/template/formularioComentario.tpl' => 1,
  ),
),false)) {
function content_62c04e9c55ea82_84131840 (Smarty_Internal_Template $_smarty_tpl) {
?><link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"><?php echo '</script'; ?>
>

<link href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />


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
                <div v-if ="permiso_logueado == administrador" class="col">
                    <a :data_id="comentar.id" v-on:click="borrar"  href="#">Eliminar</a>
                </div>
               
             </div> 
        </section>
    </div>


<?php $_smarty_tpl->_subTemplateRender("file:app/template/formularioComentario.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
