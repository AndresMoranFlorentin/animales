<?php
/* Smarty version 4.1.0, created on 2022-06-01 19:56:53
  from 'C:\xampp\htdocs\web2\Traer_animales\template\tablaAdmin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6297a865824856_38250251',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f3e98bb280f7a768f23e3db072f74c1545adeb64' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\Traer_animales\\template\\tablaAdmin.tpl',
      1 => 1654105996,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6297a865824856_38250251 (Smarty_Internal_Template $_smarty_tpl) {
?><div>
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
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['animales']->value, 'animal');
$_smarty_tpl->tpl_vars['animal']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['animal']->value) {
$_smarty_tpl->tpl_vars['animal']->do_else = false;
?>
            <tr>
                <?php $_smarty_tpl->_assignInScope('id', $_smarty_tpl->tpl_vars['animal']->value['id_animales']);?>
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
                    <td>No extinto</td>

                <?php } else { ?>
                    <td>Extinto</td>
                <?php }?>


                <td><a action="borrar" href="route.php?action=borrar/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">Borrar</a></td>
                <td><a action="editar" href="route.php?action=editar/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">Editar</a></td>
                </td>

            </tr>
        <?php ob_start();
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>

    </table>
</div><?php }
}
