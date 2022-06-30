<?php
/* Smarty version 4.0.0, created on 2022-06-28 21:33:45
  from 'C:\xampp\htdocs\web2\animales\proyectoReinoAnimal\app\template\navegadorAdmin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_62bb5799897854_82817497',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a08017b18aaef220f0d6eb80e5e6548644431f7d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\animales\\proyectoReinoAnimal\\app\\template\\navegadorAdmin.tpl',
      1 => 1656079707,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62bb5799897854_82817497 (Smarty_Internal_Template $_smarty_tpl) {
?><head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
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
</head>
<div class="container-fluid">
<div style="background-color:rgb(223, 45, 230)">
    <ul class="nav nav-mytabs" id="myTab" role="tablist">
        <li class="nav-item" style="background-color:rgb(19, 66, 7)">
            <a class="nav-link active" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
home">Inicio</a>
        </li>
        <li class="nav-item" style="background-color:rgb(180, 27, 27)">
            <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
animalesAdmin">Animales</a>
        </li>
        <li class="nav-item" style="background-color:rgb(13, 51, 104)">
            <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
especiesAdmin">Especies</a>
        </li>
        <li class="nav-item" style="background-color:rgb(185, 240, 226)">
            <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
logout">Desloguearse</a>
        </li>
    </ul>
</div><?php }
}
