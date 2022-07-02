<?php
/* Smarty version 4.0.0, created on 2022-07-02 16:18:32
  from 'C:\xampp\htdocs\web2\animales\proyectoReinoAnimal\app\template\pagAdminAnimal.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_62c053b894c8f1_13421295',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7138f5f0bca3ecce9bff3a67eab493b8503ef5d8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\animales\\proyectoReinoAnimal\\app\\template\\pagAdminAnimal.tpl',
      1 => 1656771508,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:app/template/navegadorAdmin.tpl' => 1,
    'file:app/template/permisosAdmin.tpl' => 1,
    'file:app/template/template_vue/seccionComentario.tpl' => 2,
  ),
),false)) {
function content_62c053b894c8f1_13421295 (Smarty_Internal_Template $_smarty_tpl) {
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

<h1> Seccion Animales</h1>
<?php $_smarty_tpl->_subTemplateRender("file:app/template/navegadorAdmin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php if ($_smarty_tpl->tpl_vars['permiso_logueado']->value == "administrador") {?>

    <?php $_smarty_tpl->_subTemplateRender("file:app/template/permisosAdmin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    
<?php }?>
<br>
<br>
<button><a action="mostrarFormAnimales" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
mostrarFormAnimales">
Agregar info a Tabla Animal</a></button>
<br>
<br>

<div>
    <table class="table table-bordered">
        <thead class="thead-dark">
            <th>
                <h2>Nombre</h2>
            </th>
            <th>
                <h2>Especie</h2>
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
            <th>
                <h2>Borrar</h2>
            </th>
            <th>
                <h2>Editar</h2>
            </th>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['animales']->value, 'animal');
$_smarty_tpl->tpl_vars['animal']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['animal']->value) {
$_smarty_tpl->tpl_vars['animal']->do_else = false;
?>
                <tr>
                    <?php $_smarty_tpl->_assignInScope('id', $_smarty_tpl->tpl_vars['animal']->value['id_animales']);?>
                    <td class="border-top"><?php echo $_smarty_tpl->tpl_vars['animal']->value['nombre'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['animal']->value['especies'];?>
</td>
                    <td class="border-top"><?php echo $_smarty_tpl->tpl_vars['animal']->value['descripcion'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['animal']->value['alimentacion'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['animal']->value['habitat'];?>
</td>
                    <?php if ($_smarty_tpl->tpl_vars['animal']->value['extinto'] == "0") {?>
                        <td>No extinto</td>

                    <?php } else { ?>
                        <td>Extinto</td>
                    <?php }?>
                    <td><a action="borrar" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
borrarAnimal/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">Borrar</a></td>
                    <td><a action="editar" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
editarAnimal/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">Editar</a></td>
                   
                    </td>
                   

                </tr>
            <?php ob_start();
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>

    </table>
</div>
<?php if ($_smarty_tpl->tpl_vars['permiso_logueado']->value == "administrador") {?>

    <?php $_smarty_tpl->_subTemplateRender('file:app/template/template_vue/seccionComentario.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    

   <?php } else { ?>
    
    <?php $_smarty_tpl->_subTemplateRender('file:app/template/template_vue/seccionComentario.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

<?php }?>
</div>

<?php echo '<script'; ?>
 src="api_js/comentarios.js"><?php echo '</script'; ?>
><?php }
}
