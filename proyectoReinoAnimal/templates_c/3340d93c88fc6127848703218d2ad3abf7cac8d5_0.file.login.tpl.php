<?php
/* Smarty version 4.1.1, created on 2022-06-20 21:46:57
  from 'C:\xampp\htdocs\web_2\animales\proyectoReinoAnimal\template\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_62b0ceb17d5072_59780760',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3340d93c88fc6127848703218d2ad3abf7cac8d5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web_2\\animales\\proyectoReinoAnimal\\template\\login.tpl',
      1 => 1655752572,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62b0ceb17d5072_59780760 (Smarty_Internal_Template $_smarty_tpl) {
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
