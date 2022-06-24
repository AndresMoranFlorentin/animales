<?php
/* Smarty version 4.1.1, created on 2022-06-23 04:05:34
  from 'C:\xampp\htdocs\web_2\animales\proyectoReinoAnimal\app\template\funcionesAdmin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_62b3ca6e737460_24239441',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e95c1997cd27564a0aae47ef7c3cc2599a55e397' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web_2\\animales\\proyectoReinoAnimal\\app\\template\\funcionesAdmin.tpl',
      1 => 1655949925,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62b3ca6e737460_24239441 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="row" style="height: 200px;">
    <div>
        <button>
            <a action="mostrarFormAnimales" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/mostrarFormAnimales">
                Agregar info a Tabla animal</a></button>
    </div>
</div>

<h4>Si desea buscar algun Animal en especifico,
    puede hacerlo a traves de este formulario:</h4>
<form class="form-inline" method="post" action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
buscarAnimal">
    <div class="form-group mx-sm-3">
        <label for="inputUser" class="sr-only">Animal</label>
        <input type="text" class="form-control" name="animal" placeholder="Nombre de animal" required>
    </div>
    <div class="form-group mx-sm-3">
        <label for="inputPass" class="sr-only">Especie</label>
        <input type="text" class="form-control" name="especie" placeholder="especie" required>
    </div>
    <button type="submit" class="btn btn-primary">Buscar...</button>
</form>
<?php }
}
