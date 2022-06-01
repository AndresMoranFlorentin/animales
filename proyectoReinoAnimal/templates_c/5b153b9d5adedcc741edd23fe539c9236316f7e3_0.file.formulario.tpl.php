<?php
/* Smarty version 4.1.0, created on 2022-06-02 00:39:28
  from 'C:\xampp\htdocs\web2\proyectoReinoAnimal\template\formulario.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6297eaa026edd3_46333424',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5b153b9d5adedcc741edd23fe539c9236316f7e3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\proyectoReinoAnimal\\template\\formulario.tpl',
      1 => 1654103423,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6297eaa026edd3_46333424 (Smarty_Internal_Template $_smarty_tpl) {
?> <h2>Listado de animales</h2>
        
            <form action="route.php?action=agregar" method="post" class="my-form">
             <div class="container" style="background-color:#bbb">
                <label>Nombre: <input type="text" name="nombre"></label></p>
                <label>Descripcion: <input type="text" name="descripcion"></label>
                <label>Alimentacion: <input type="text" name="alimentacion"></label>
                <label>Habitat: <input type="text" name="habitat"></label>
                <label>Especie:
                    <select name="especie">
                        <option >------</option>
                        <option value="1">Mamifero</option>
                        <option value="4">Reptil</option>
                        <option value="2">Molusco</option>
                        <option value="7">Aracnido</option>
                        <option value="8">Insecto</option>
                        <option value="9">Aves</option>
                        <option value="3">Anfibios</option>
                        <option value="5">Peces</option>
                        <option value="6">Gusanos</option>
                    </select>
                </label>
                <label>Extinto o no:
                    <select name="extinto">
                        <option>------</option>
                        <option value="0">Extinto</option>
                        <option value="1">No Extinto</option>
                    </select>
                </label>
                <input type="submit">
                </div>
            </form>
        
        <?php }
}
