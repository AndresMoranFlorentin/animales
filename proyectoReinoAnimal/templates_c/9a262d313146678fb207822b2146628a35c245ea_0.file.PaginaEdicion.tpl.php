<?php
/* Smarty version 4.1.0, created on 2022-06-09 22:45:43
  from 'C:\xampp\htdocs\web2\proyectoReinoAnimal\template\PaginaEdicion.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62a25bf7a27f47_41005917',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9a262d313146678fb207822b2146628a35c245ea' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\proyectoReinoAnimal\\template\\PaginaEdicion.tpl',
      1 => 1654726773,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62a25bf7a27f47_41005917 (Smarty_Internal_Template $_smarty_tpl) {
?><h1>Escriba los datos que piensa editar a traves de este formulario:</h1>

<?php if ($_smarty_tpl->tpl_vars['tipoDeEdicion']->value == 'editar animal') {?>
    <label></label>
    <form action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actualizarAnimal" method="post" class="my-form">
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
                <?php if ($_smarty_tpl->tpl_vars['animal']->value['extinto'] == 0) {?>
                    <option selected value="0">No Extinto</option>
                    <option value="1">Extinto</option>
                <?php } else { ?>
                    <option value="0">No Extinto</option>
                    <option selected value="1">Extinto</option>
                <?php }?>
                </select>
            </label>
            <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['animal']->value['id_animales'];?>
" name="id" />
            <input type="submit">
        </div>
    </form>
<?php } elseif ($_smarty_tpl->tpl_vars['tipoDeEdicion']->value == 'editar especie') {?>

    <form action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actualizarEspecie" method="post" class="my-form">

        <div class="container" style="background-color:rgb(132, 218, 115)">
            <label>Nombre de Especie: <input type="text" name="nombreEspecie" value="<?php echo $_smarty_tpl->tpl_vars['especie']->value['especies'];?>
"></label></p>
            <label>Vertebrado si o no?:
                <select name="vertebrado">
                    <?php if ($_smarty_tpl->tpl_vars['especie']->value['vertebrados'] == "1") {?>
                        <option>-----</option>
                        <option selected value="1">Vertebrado</option>
                        <option value="0">Invertebrado</option>
                    <?php } else { ?>
                        <option>-----</option>
                        <option selected value="0">Invertebrado</option>
                        <option value="1">Vertebrado</option>
                    <?php }?>
            </label>
            <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['especie']->value['id_especie'];?>
" name="id" />
            <input type="submit">
        </div>
    </form>
<?php } else { ?>

<?php }
}
}
