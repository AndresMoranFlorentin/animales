<?php
/* Smarty version 4.0.0, created on 2022-07-04 18:55:34
  from 'C:\xampp\htdocs\web2\animales\proyectoReinoAnimal\app\template\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_62c31b86573058_10385637',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f3102d33969e325c0deb18674b80fd2efe0b5e47' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\animales\\proyectoReinoAnimal\\app\\template\\login.tpl',
      1 => 1656889384,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62c31b86573058_10385637 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container-fluid">
        <h1>Login : </h1>
        <div class="form-group" style="background-color:rgb(132, 230, 200)">
                <form action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
loguearse" method="post" class="my-form">
                        <label>Contraseña: <input type="password" class="form-control" name="contraseña"
                                        placeholder="Ingrese su contraseña" required></label>
                        <label>Mail: <input type="text" name="mail" placeholder="Ingrese su email" required></label>
                        <button class="btn btn-primary">Login</button>
        </div>
</div><?php }
}
