<?php
/* Smarty version 4.1.0, created on 2022-06-10 17:02:55
  from 'C:\xampp\htdocs\web2\proyectoReinoAnimal\template\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62a35d1f226289_18861383',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1a6ee26924ca23f70f4c1ec9ca6306888fd01834' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\proyectoReinoAnimal\\template\\login.tpl',
      1 => 1654873335,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62a35d1f226289_18861383 (Smarty_Internal_Template $_smarty_tpl) {
?>
<h1>Login : </h1>
<div class="form-group" style="background-color:rgb(132, 230, 200)">
    <form action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
loguearse" method="post" class="my-form">
        <label>Nombre: <input type="text" name="nombre" placeholder="Ingrese su nombre" required></label></p>
        <label>Contraseña: <input type="password" class="form-control" name="contraseña"
                placeholder="Ingrese su contraseña" required></label>
        <label>Mail: <input type="text" name="email" placeholder="Ingrese su email" required></label>
        <button class="btn btn-primary">Login</button>
</div><?php }
}
