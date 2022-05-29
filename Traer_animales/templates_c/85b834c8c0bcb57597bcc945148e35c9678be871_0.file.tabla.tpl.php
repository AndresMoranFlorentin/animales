<?php
/* Smarty version 4.1.0, created on 2022-05-28 21:11:51
  from 'C:\xampp\htdocs\web2\Traer_animales\Plantillas\tabla.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_629273f76452f5_03832255',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '85b834c8c0bcb57597bcc945148e35c9678be871' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\Traer_animales\\Plantillas\\tabla.tpl',
      1 => 1653764219,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_629273f76452f5_03832255 (Smarty_Internal_Template $_smarty_tpl) {
?>
 <div><table border=1>
        <th><h2>Nombre</h2></th>
        <th><h2>Descripcion</h2></th>
        <th><h2>Alimentacion</h2></th>
        <th><h2>Habitat</h2></th>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['animales']->value, 'animal');
$_smarty_tpl->tpl_vars['animal']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['animal']->value) {
$_smarty_tpl->tpl_vars['animal']->do_else = false;
?> 
            <tr>

           
            <?php $_smarty_tpl->_assignInScope('id', $_smarty_tpl->tpl_vars['animal']->value['id_animales']);?> 

            <td><?php echo $_smarty_tpl->tpl_vars['animal']->value['Nombre'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['animal']->value['descripcion'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['animal']->value['alimentacion'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['animal']->value['habitat'];?>
</td>


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
