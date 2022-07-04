<?php
/* Smarty version 4.0.0, created on 2022-07-03 23:06:03
  from 'C:\xampp\htdocs\web2\animales\proyectoReinoAnimal\app\template\pagAdminEspecie.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_62c204bbe56676_30823895',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1ccf471f36394fea26c5e4da2c57795ec24ac60f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\animales\\proyectoReinoAnimal\\app\\template\\pagAdminEspecie.tpl',
      1 => 1656870157,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:app/template/navegadorAdmin.tpl' => 1,
    'file:app/template/template_vue/seccionComentario.tpl' => 2,
  ),
),false)) {
function content_62c204bbe56676_30823895 (Smarty_Internal_Template $_smarty_tpl) {
?>
<head>
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

<div class="container-fluid">
<h1> Seccion Especies</h1>
<?php if ($_smarty_tpl->tpl_vars['habilito']->value == 'acceso privado') {?>
    <?php $_smarty_tpl->_subTemplateRender("file:app/template/navegadorAdmin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <div>

        <label></label>
        <label></label>
        <button><a action="mostrarFormEspecies" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
mostrarFormEspecies">Agregar info a Tabla
                Especies</a></button>
        <label></label>
        <label></label>
    <?php } else { ?>
    <?php }?>
    <table class="table table-bordered">
        <thead class="thead-dark">
            <th>
                <h2>Nombre</h2>
            </th>
            <th>
                <h2>Vertebrado?</h2>
            </th>
            <?php if ($_smarty_tpl->tpl_vars['habilito']->value == 'acceso privado') {?>
                <th>
                    <h2>Borrar</h2>
                </th>
                <th>
                    <h2>Editar</h2>
                </th>
            <?php }?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['especies']->value, 'espec');
$_smarty_tpl->tpl_vars['espec']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['espec']->value) {
$_smarty_tpl->tpl_vars['espec']->do_else = false;
?>
                <tr>
                    <?php $_smarty_tpl->_assignInScope('id', $_smarty_tpl->tpl_vars['espec']->value['id_especie']);?>
                    <td><?php echo $_smarty_tpl->tpl_vars['espec']->value['especies'];?>
</td>
                    <?php if ($_smarty_tpl->tpl_vars['espec']->value['vertebrados'] == "0") {?>

                        <td>Invertebrado</td>

                    <?php } else { ?>
                        <td>Vertebrado</td>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['habilito']->value == 'acceso privado') {?>
                        <td><a action="borrar" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
borrarEspecie/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">Borrar</a></td>
                        <td><a action="editar" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
editarEspecie/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">Editar</a></td>
                    <?php } else { ?>
                    <?php }?>
                    </td>
                </tr>
            <?php ob_start();
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>

    </table>
</div>
        <?php if ($_smarty_tpl->tpl_vars['permiso_logueado']->value == "administrador" && $_smarty_tpl->tpl_vars['habilito']->value !== "publico") {?>

            <?php $_smarty_tpl->_subTemplateRender('file:app/template/template_vue/seccionComentario.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <?php } elseif ($_smarty_tpl->tpl_vars['permiso_logueado']->value == "usuario" && $_smarty_tpl->tpl_vars['habilito']->value !== "publico") {?>

            <?php $_smarty_tpl->_subTemplateRender('file:app/template/template_vue/seccionComentario.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
            
        <?php } else { ?>

        <?php }?>
</div><?php }
}
