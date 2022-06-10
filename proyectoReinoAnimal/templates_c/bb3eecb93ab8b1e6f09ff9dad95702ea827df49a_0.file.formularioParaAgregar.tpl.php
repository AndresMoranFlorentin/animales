<?php
/* Smarty version 4.1.0, created on 2022-06-09 23:27:44
  from 'C:\xampp\htdocs\web2\proyectoReinoAnimal\template\formularioParaAgregar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62a265d0c9b463_36816631',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bb3eecb93ab8b1e6f09ff9dad95702ea827df49a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\proyectoReinoAnimal\\template\\formularioParaAgregar.tpl',
      1 => 1654696537,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62a265d0c9b463_36816631 (Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php if ($_smarty_tpl->tpl_vars['tipoDeForm']->value == 'animales') {?>
	<h2>Agregar a animales</h2>
        
            <form action="agregarAnimales" method="post" class="my-form">
             <div class="container" style="background-color:#bbb">
                <label>Nombre: <input type="text" name="nombre"></label></p>
                <label>Descripcion: <input type="text" name="descripcion"></label>
                <label>Alimentacion: <input type="text" name="alimentacion"></label>
                <label>Habitat: <input type="text" name="habitat"></label>
                <label>Especie:
                    <select name="especie">
                        <option >------</option>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['especies']->value, 'nombres');
$_smarty_tpl->tpl_vars['nombres']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['nombres']->value) {
$_smarty_tpl->tpl_vars['nombres']->do_else = false;
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['nombres']->value['id_especie'];?>
"><?php echo $_smarty_tpl->tpl_vars['nombres']->value['especies'];?>
</option>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </select>
                </label>
                <label>Extinto o no:
                    <select name="extinto">
                        <option>------</option>
                        <option value="1">Extinto</option>
                        <option value="0">No Extinto</option>
                    </select>
                </label>
                <input type="submit">
                </div>
            </form>
<?php } elseif ($_smarty_tpl->tpl_vars['tipoDeForm']->value == 'especies') {?>
	<h2>Agregar a especies</h2>
    <form action="agregarEspecies" method="post" class="my-form">

             <div class="container" style="background-color:rgb(132, 218, 115)">
                <label>Nombre de Especie: <input type="text" name="nombreEspecie"></label></p>
                <label>Vertebrado si o no?: 
                <select name="vertebrado">
                    <option>------</option>
                    <option value="0">Invertebrado</option>
                    <option value="1">Vertebrado</option>
                </label>
                <input type="submit">
                </div>
    </form>
<?php } else { ?>
	
<?php }?>
        <?php }
}
