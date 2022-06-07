<?php
/* Smarty version 4.1.0, created on 2022-06-03 22:59:09
  from 'C:\xampp\htdocs\web2\proyectoReinoAnimal\template\errorBorrarEspecie.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_629a761decd242_54348456',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5b8f5ebfb0a921a8316f00acd9a9f594158f201c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\proyectoReinoAnimal\\template\\errorBorrarEspecie.tpl',
      1 => 1654289929,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_629a761decd242_54348456 (Smarty_Internal_Template $_smarty_tpl) {
?><h2>Debera borrar primero los siguientes animales, si desea eliminar esa especie:</h2>
<label></label>
<label></label>
<ul>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['nombres']->value, 'nombr');
$_smarty_tpl->tpl_vars['nombr']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['nombr']->value) {
$_smarty_tpl->tpl_vars['nombr']->do_else = false;
?>

        <li><?php echo $_smarty_tpl->tpl_vars['nombr']->value['nombre'];?>
</li>
  
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul><?php }
}
