<?php
/* Smarty version 4.1.1, created on 2022-06-21 15:50:03
  from 'C:\xampp\htdocs\web_2\animales\proyectoReinoAnimal\app\template\errorBorrarEspecie.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_62b1cc8ba99922_25335815',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e8c9c5145ded244f742fb50b4ab5157d41891e9c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web_2\\animales\\proyectoReinoAnimal\\app\\template\\errorBorrarEspecie.tpl',
      1 => 1655819400,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62b1cc8ba99922_25335815 (Smarty_Internal_Template $_smarty_tpl) {
?>
<h2>Debera borrar primero los siguientes animales, si desea eliminar esa especie:</h2>
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
