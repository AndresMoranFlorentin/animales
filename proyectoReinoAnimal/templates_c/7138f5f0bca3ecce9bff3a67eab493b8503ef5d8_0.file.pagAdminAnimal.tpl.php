<?php
/* Smarty version 4.0.0, created on 2022-07-04 19:01:02
  from 'C:\xampp\htdocs\web2\animales\proyectoReinoAnimal\app\template\pagAdminAnimal.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_62c31cce3d2af7_21558378',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7138f5f0bca3ecce9bff3a67eab493b8503ef5d8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\animales\\proyectoReinoAnimal\\app\\template\\pagAdminAnimal.tpl',
      1 => 1656954026,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:app/template/navegadorAdmin.tpl' => 1,
    'file:app/template/permisosAdmin.tpl' => 1,
    'file:app/template/template_vue/seccionComentario.tpl' => 1,
    'file:app/template/formAgregoCom.tpl' => 1,
  ),
),false)) {
function content_62c31cce3d2af7_21558378 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:app/template/navegadorAdmin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h1> Seccion Animales</h1>
<?php if ($_smarty_tpl->tpl_vars['permiso_logueado']->value == "administrador") {?>

    <?php $_smarty_tpl->_subTemplateRender("file:app/template/permisosAdmin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }?>

<button><a action="mostrarFormAnimales" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
mostrarFormAnimales">
        Agregar info a Tabla Animal</a></button>
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
            <?php if ($_smarty_tpl->tpl_vars['permiso_logueado']->value == "usuario") {?>

                <th>
                    <h2></h2>
                </th>
            <?php }?>
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

                    <?php if ($_smarty_tpl->tpl_vars['permiso_logueado']->value == "usuario") {?>

                        <td><a action="comentar" href="comentar/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">comentar</a></td>

                    <?php }?>
                    </td>


                </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </table>
</div>
<?php if ($_smarty_tpl->tpl_vars['permiso_logueado']->value == "usuario") {?>
<br>
    <button><a action="seccionAnimalPaginada" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
seccionAnimalPaginada">
        Tabla Animal En forma Paginada</a>
        </button>
     
<?php }?>
<br>
<br>
<?php $_smarty_tpl->_subTemplateRender("file:app/template/template_vue/seccionComentario.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:app/template/formAgregoCom.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
