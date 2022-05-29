<?php
/* Smarty version 4.1.0, created on 2022-05-28 22:51:39
  from 'C:\xampp\htdocs\web2\Traer_animales\Plantillas\filaTraida.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62928b5b571829_23945656',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd36280856ecbfb290aa6e8c18af0deaeb2ac9b35' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\Traer_animales\\Plantillas\\filaTraida.tpl',
      1 => 1653771080,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62928b5b571829_23945656 (Smarty_Internal_Template $_smarty_tpl) {
?><h1>Esta es la fila que se vera afectada por tu edicion:</h1>
<label></label>
<table border=1>
        <th><h2>Nombre</h2></th>
        <th><h2>Descripcion</h2></th>
        <th><h2>Alimentacion</h2></th>
        <th><h2>Habitat</h2></th>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fila']->value, 'animal');
$_smarty_tpl->tpl_vars['animal']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['animal']->value) {
$_smarty_tpl->tpl_vars['animal']->do_else = false;
?> 
            <tr>


            <td><?php echo $_smarty_tpl->tpl_vars['animal']->value['Nombre'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['animal']->value['descripcion'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['animal']->value['alimentacion'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['animal']->value['habitat'];?>
</td>

            </td>
        
       </tr>
       <?php ob_start();
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>

        </table>
        </div>
        <h1>Escriba los datos que piensa editar a traves de este formulario:</h1>
<label></label>
<form action="route.php?action=actualizar" method="post" class="my-form">
             <div class="container" style="background-color:#bbb">
                <label>Nombre: <input type="text" name="nombre"></label></p>
                <label>Descripcion: <input type="text" name="descripcion"></label>
                <label>Alimentacion: <input type="text" name="alimentacion"></label>
                <label>Habitat: <input type="text" name="habitat"></label>
                <label>Especie:
                    <select name="especie">
                        <option >------</option>
                        <option value="1">Mamifero</option>
                        <option value="4">Reptil</option>
                        <option value="2">Molusco</option>
                        <option value="7">Aracnido</option>
                        <option value="8">Insecto</option>
                        <option value="9">Aves</option>
                        <option value="3">Anfibios</option>
                        <option value="5">Peces</option>
                        <option value="6">Gusanos</option>
                    </select>
                </label>
                <label>Extinto o no:
                    <select name="extinto">
                        <option>------</option>
                        <option value="0">Extinto</option>
                        <option value="1">No Extinto</option>
                    </select>
                </label>
                <input type="submit">
                </div>
            </form><?php }
}
