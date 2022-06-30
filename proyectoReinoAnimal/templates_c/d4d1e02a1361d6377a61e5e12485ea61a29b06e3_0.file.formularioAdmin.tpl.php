<?php
/* Smarty version 4.0.0, created on 2022-06-29 01:01:15
  from 'C:\xampp\htdocs\web2\animales\proyectoReinoAnimal\app\template\formularioAdmin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_62bb883beff415_67717420',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd4d1e02a1361d6377a61e5e12485ea61a29b06e3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\animales\\proyectoReinoAnimal\\app\\template\\formularioAdmin.tpl',
      1 => 1656457256,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62bb883beff415_67717420 (Smarty_Internal_Template $_smarty_tpl) {
?><div>
    <h2>si desea ir a la seccion Administrador,complete los siguientes datos:</h2>

    <form action="ir_a_admin" method="post" class="my-form">
        <div class="container" style="background-color:rgb(133, 205, 233)">
            <label>Nombre: <input type="text" name="nombre"></label></p>
            <label>Email: <input type="email" name="email"></label>
            <label>Contraseña: <input type="password" name="contraseña"></label>
            <input type="submit">
        </div>
    </form>
</div><?php }
}
