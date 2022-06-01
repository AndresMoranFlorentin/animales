<?php
/* Smarty version 4.1.0, created on 2022-06-01 00:53:13
  from 'C:\xampp\htdocs\web2\Traer_animales\template\tablaNoAdmin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62969c59409d59_28829850',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2c28830b15755c8eb421fee95b0c0d3761502c11' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\Traer_animales\\template\\tablaNoAdmin.tpl',
      1 => 1654037584,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62969c59409d59_28829850 (Smarty_Internal_Template $_smarty_tpl) {
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
                    <td>Extinto</td>
                <?php }?>

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
