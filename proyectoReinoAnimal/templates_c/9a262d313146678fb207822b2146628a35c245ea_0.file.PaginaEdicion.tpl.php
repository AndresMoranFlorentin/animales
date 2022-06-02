<?php
/* Smarty version 4.1.0, created on 2022-06-02 23:35:09
  from 'C:\xampp\htdocs\web2\proyectoReinoAnimal\template\PaginaEdicion.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62992d0dded757_19457493',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9a262d313146678fb207822b2146628a35c245ea' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\proyectoReinoAnimal\\template\\PaginaEdicion.tpl',
      1 => 1654205704,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62992d0dded757_19457493 (Smarty_Internal_Template $_smarty_tpl) {
?><h1>Escriba los datos que piensa editar a traves de este formulario:</h1>
<label></label>
<form action="route.php?action=actualizar" method="post" class="my-form">
    <div class="form-group" style="background-color:rgb(132, 230, 200)">
        <label>Nombre: <input type="text" name="nombre" value="<?php echo $_smarty_tpl->tpl_vars['animal']->value['nombre'];?>
" required></label>
        <label>Descripcion: <input type="text" name="descripcion" value="<?php echo $_smarty_tpl->tpl_vars['animal']->value['descripcion'];?>
" required></label>
        <label>Alimentacion: <input type="text" name="alimentacion" value="<?php echo $_smarty_tpl->tpl_vars['animal']->value['alimentacion'];?>
" required></label>
        <label>Habitat: <input type="text" name="habitat" value="<?php echo $_smarty_tpl->tpl_vars['animal']->value['habitat'];?>
" required></label>
        <label>Especie:
            <select name="especie" class="form-control">
                <option>--Seleccionar--</option>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['especie']->value, 'subespecie');
$_smarty_tpl->tpl_vars['subespecie']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['subespecie']->value) {
$_smarty_tpl->tpl_vars['subespecie']->do_else = false;
?>
                    <?php if ($_smarty_tpl->tpl_vars['animal']->value['id_especie'] != $_smarty_tpl->tpl_vars['subespecie']->value['id_especie']) {?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['subespecie']->value['id_especie'];?>
"><?php echo $_smarty_tpl->tpl_vars['subespecie']->value['especies'];?>
</option>
                    <?php } else { ?>
                        <option selected value="<?php echo $_smarty_tpl->tpl_vars['subespecie']->value['id_especie'];?>
"><?php echo $_smarty_tpl->tpl_vars['subespecie']->value['especies'];?>
</option>
                    <?php }?>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select>
        </label>
        <label>Extinto o no:
            <select name="extinto">
                <option value="0">Extinto</option>
                <option value="1">No Extinto</option>
            </select>
        </label>
        <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['animal']->value['id_animales'];?>
" name="id" />
        <input type="submit">
    </div>
</form><?php }
}
