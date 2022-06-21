<?php
/* Smarty version 4.1.1, created on 2022-06-21 15:43:58
  from 'C:\xampp\htdocs\web_2\animales\proyectoReinoAnimal\app\template\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_62b1cb1e256ac1_19022102',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '382e9e40fdce85d83c99a86da09ce47d6a91c6e3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web_2\\animales\\proyectoReinoAnimal\\app\\template\\login.tpl',
      1 => 1655752572,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62b1cb1e256ac1_19022102 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="container-fluid">
<h1>Login : </h1>
<div class="form-group" style="background-color:rgb(132, 230, 200)">
    <form action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
loguearse" method="post" class="my-form">
        <label>Contraseña: <input type="password" class="form-control" name="contraseña"
                placeholder="Ingrese su contraseña" required></label>
        <label>Mail: <input type="text" name="email" placeholder="Ingrese su email" required></label>
        <button class="btn btn-primary">Login</button>
</div>
</div><?php }
}
