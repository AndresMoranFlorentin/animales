<?php
/* Smarty version 4.0.0, created on 2022-07-05 23:46:39
  from 'C:\xampp\htdocs\web2\animales\proyectoReinoAnimal\app\template\navegadorAdmin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_62c4b13fac89c5_16605085',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a08017b18aaef220f0d6eb80e5e6548644431f7d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\animales\\proyectoReinoAnimal\\app\\template\\navegadorAdmin.tpl',
      1 => 1657057591,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62c4b13fac89c5_16605085 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  
</head>
<body>
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
    </div>
</div>

<?php }
}
