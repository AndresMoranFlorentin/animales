<?php
/* Smarty version 4.1.0, created on 2022-06-01 21:16:26
  from 'C:\xampp\htdocs\web2\Traer_animales\template\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6297bb0a93a395_37666600',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0dd1195303e550d1a03ccb523b18f4e6a71f23d8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\Traer_animales\\template\\login.tpl',
      1 => 1654110981,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6297bb0a93a395_37666600 (Smarty_Internal_Template $_smarty_tpl) {
?><h1>Login : </h1>
<div  class="form-group" style="background-color:rgb(132, 230, 200)">
<form action="route.php?action=loguearse" method="post" class="my-form">
        <label>Nombre: <input type="text" name="nombre" placeholder="Ingrese su nombre" required></label></p>
        <label>Contraseña: <input type="password" class="form-control" name="contraseña" placeholder="Ingrese su contraseña" required></label>
        <label>Mail: <input type="text" name="email" placeholder="Ingrese su email" required></label>
        <button class="btn btn-primary">Login</button>
    </div><?php }
}
