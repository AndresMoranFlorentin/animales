<?php
/* Smarty version 4.0.0, created on 2022-06-30 23:48:35
  from 'C:\xampp\htdocs\web2\animales\proyectoReinoAnimal\app\template\formularioComentario.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_62be1a330876c5_46566335',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '07ad7ddfc2c74b07450871496ee771e9d08fa23e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\animales\\proyectoReinoAnimal\\app\\template\\formularioComentario.tpl',
      1 => 1656625579,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62be1a330876c5_46566335 (Smarty_Internal_Template $_smarty_tpl) {
?>
<h2>Agregar Comentario</h2>
    <form id="form-agregar-comentario" class="form-row">

             <div class="container-fluid" style="background-color:rgba(180, 21, 21, 0.603)">
                <label>Comentario: <textarea name="comentario" rows="3"></textarea></label></p>
                <label>Puntaje: 
                <select name="puntaje">
                    <option>------</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </label>
                
                <input type="submit">
                </div>
    </form><?php }
}
