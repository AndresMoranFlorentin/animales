<?php
/* Smarty version 4.0.0, created on 2022-07-02 04:31:18
  from 'C:\xampp\htdocs\web2\animales\proyectoReinoAnimal\app\template\permisosAdmin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_62bfadf6df61c6_12735154',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '61e947276bbfddcf773c8dde987227a5162a9466' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\animales\\proyectoReinoAnimal\\app\\template\\permisosAdmin.tpl',
      1 => 1656729058,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62bfadf6df61c6_12735154 (Smarty_Internal_Template $_smarty_tpl) {
?><label></label>
<label></label>
<label></label>
<div class="container">
<h3>Para eliminar usuarios o darles permiso de administrador, observe las siguientes opciones:</h3>

<table class="table table-bordered">
    <thead class="thead-dark">
        <th>
            <h2>Nombre</h2>
        </th>
        <th>
            <h2>Email</h2>
        </th>
        <th>
            <h2>Rol</h2>
        </th>
        <th>
            <h2>opcion 1</h2>
        </th>
        <th>
            <h2>opcion 2</h2>
        </th>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['los_usuarios']->value, 'user');
$_smarty_tpl->tpl_vars['user']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->do_else = false;
?>
            <tr>
                <?php $_smarty_tpl->_assignInScope('id', $_smarty_tpl->tpl_vars['user']->value['id_usuario']);?>
                <td class="table-warning"><?php echo $_smarty_tpl->tpl_vars['user']->value['nombre'];?>
</td>
                <td class="table-primary"><?php echo $_smarty_tpl->tpl_vars['user']->value['mail'];?>
</td>
                <td class="table-danger"><?php echo $_smarty_tpl->tpl_vars['user']->value['rol'];?>
</td>

                <?php if ($_smarty_tpl->tpl_vars['user']->value['rol'] == "administrador" && $_smarty_tpl->tpl_vars['user']->value['nombre'] != "Andres") {?>
                    <td><a action="noSerAdmin" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
noSerAdmin/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">Quitar Administrador</a></td>
                    <td></td>
                <?php } elseif ($_smarty_tpl->tpl_vars['user']->value['rol'] == "administrador" && $_smarty_tpl->tpl_vars['user']->value['nombre'] == "Andres") {?>
                    <td>No Esta permitido modificarlo</td>
                <?php } else { ?>
                    <td><a action="borrar" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
borrarUsuario/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">Borrar Usuario</a></td>
                    <td><a action="editar" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
hacerAdmin/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">Hacer Administrador</a></td>
                <?php }?>


            </tr>
        <?php ob_start();
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>

</table>
</div>
<br><?php }
}
