<?php
/* Smarty version 4.1.1, created on 2022-06-21 15:44:25
  from 'C:\xampp\htdocs\web_2\animales\proyectoReinoAnimal\app\template\PaginaEdicion.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_62b1cb39ee56f4_31317118',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd55c51c6e995e841a7dab5b189adfdb98a8d7299' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web_2\\animales\\proyectoReinoAnimal\\app\\template\\PaginaEdicion.tpl',
      1 => 1655816732,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:app/template/navegadorAdmin.tpl' => 1,
  ),
),false)) {
function content_62b1cb39ee56f4_31317118 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:app/template/navegadorAdmin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container-fluid">
    <h1>Escriba los datos que piensa editar a traves de este formulario:</h1>

    <?php if ($_smarty_tpl->tpl_vars['tipoDeEdicion']->value == 'editar animal') {?>

        <form action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actualizarAnimal" method="post" class="my-form">
            <div class="form-group">
                <label for="exampleFormControlInput1">Nombre</label>
                <input type="text" name="nombre" value="<?php echo $_smarty_tpl->tpl_vars['animal']->value['nombre'];?>
" required>>
            </div>
            <label>Descripcion</label>
            <textarea class="form-control" name="descripcion" rows="3" value="<?php echo $_smarty_tpl->tpl_vars['animal']->value['descripcion'];?>
"
                required><?php echo $_smarty_tpl->tpl_vars['animal']->value['descripcion'];?>
</textarea>
            <label></label>
            <textarea class="form-control" name="alimentacion" rows="3" value="<?php echo $_smarty_tpl->tpl_vars['animal']->value['alimentacion'];?>
"
                required><?php echo $_smarty_tpl->tpl_vars['animal']->value['alimentacion'];?>
</textarea>
            <label></label>
            <textarea class="form-control" name="habitat" rows="2" value="<?php echo $_smarty_tpl->tpl_vars['animal']->value['habitat'];?>
"
                required><?php echo $_smarty_tpl->tpl_vars['animal']->value['habitat'];?>
</textarea>

            <div class="form-group">
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
            </div>
            <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['animal']->value['id_animales'];?>
" name="id" />
                <input class="btn-primary" type="submit">
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

    <?php }?>
</div><?php }
}
