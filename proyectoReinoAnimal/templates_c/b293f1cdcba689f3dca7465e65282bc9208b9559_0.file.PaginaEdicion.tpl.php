<?php
/* Smarty version 4.1.0, created on 2022-06-01 19:56:44
  from 'C:\xampp\htdocs\web2\Traer_animales\template\PaginaEdicion.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6297a85c860e15_34769456',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b293f1cdcba689f3dca7465e65282bc9208b9559' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\Traer_animales\\template\\PaginaEdicion.tpl',
      1 => 1654106195,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6297a85c860e15_34769456 (Smarty_Internal_Template $_smarty_tpl) {
?><h1>Esta es la fila que se vera afectada por tu edicion:</h1>
<label></label>
<table border=1>
    <th>
        <h2>Especie</h2>
    </th>
    <th>
        <h2>Nombre</h2>
    </th>
    <th>
        <h2>Descripcion</h2>
    </th>
    <th>
        <h2>Alimentacion</h2>
    </th>
    <th>
        <h2>Habitat</h2>
    </th>
    <th>
        <h2>Extinto</h2>
    </th>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fila']->value, 'animal');
$_smarty_tpl->tpl_vars['animal']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['animal']->value) {
$_smarty_tpl->tpl_vars['animal']->do_else = false;
?>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['animal']->value['especies'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['animal']->value['nombre'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['animal']->value['descripcion'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['animal']->value['alimentacion'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['animal']->value['habitat'];?>
</td>

            <?php if ($_smarty_tpl->tpl_vars['animal']->value['extinto'] == 0) {?>
                <td>no extinto</td>

            <?php } else { ?>
                <td>extinto</td>
            <?php }?>
            </td>
        </tr>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</table>
</div>
<h1>Escriba los datos que piensa editar a traves de este formulario:</h1>
<label></label>
<form action="route.php?action=actualizar" method="post" class="my-form">
    <div class="container" style="background-color:rgb(132, 230, 200)">
        <label>Especie: <input type="text" name="nombre" value="<?php echo $_smarty_tpl->tpl_vars['animal']->value['especies'];?>
" required></label>
        <label>Nombre: <input type="text" name="nombre" value="<?php echo $_smarty_tpl->tpl_vars['animal']->value['nombre'];?>
" required></label>
        <label>Descripcion: <input type="text" name="descripcion" value="<?php echo $_smarty_tpl->tpl_vars['animal']->value['descripcion'];?>
" required></label>
        <label>Alimentacion: <input type="text" name="alimentacion" value="<?php echo $_smarty_tpl->tpl_vars['animal']->value['alimentacion'];?>
" required></label>
        <label>Habitat: <input type="text" name="habitat" value="<?php echo $_smarty_tpl->tpl_vars['animal']->value['habitat'];?>
" required></label>
        <label>Especie:
            <select name="especie">
                <option>------</option>
                <option value="1">Mamifero</option>
                <option value="4">Reptil</option>
                <option value="2">Molusco</option>
                <option value="7">Aracnido</option>
                <option value="8">Insecto</option>
                <option value="9">Aves</option>
                <option value="3">Anfibios</option>
                <option value="5">Peces</option>
                <option value="6">Gusanos</option>
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
