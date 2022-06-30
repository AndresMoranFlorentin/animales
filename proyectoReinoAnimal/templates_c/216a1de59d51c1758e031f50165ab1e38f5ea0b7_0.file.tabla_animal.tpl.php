<?php
/* Smarty version 4.0.0, created on 2022-06-29 19:39:31
  from 'C:\xampp\htdocs\web2\animales\proyectoReinoAnimal\app\template\template_vue\tabla_animal.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_62bc8e530631d3_67776542',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '216a1de59d51c1758e031f50165ab1e38f5ea0b7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\animales\\proyectoReinoAnimal\\app\\template\\template_vue\\tabla_animal.tpl',
      1 => 1656524367,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62bc8e530631d3_67776542 (Smarty_Internal_Template $_smarty_tpl) {
?><link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
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
<?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"><?php echo '</script'; ?>
>


    <div class="container-fluid">
        <section id="template-vue-animales">
            <table class="table table-bordered">
                <thead class="thead-dark">
                    <th>
                        <h2>Nombre</h2>
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
                <tbody>
                    <tr v-for = "animal in animales">
                        <td class="border-top">{{animal.nombre}}</td>
                        <td class="border-top">{{animal.descripcion}}</td>
                        <td class="border-top">{{animal.alimentacion}}</td>
                        <td class="border-top">{{animal.habitat}}</td>
                        <td v-if="animal.extinto == 0">
                            No esta extinto
                        </td>
                        <td v-else>
                            Extinto</td>
                    </tr>
                </tbody>
            </table>
        </section>
    </div>
    <?php echo '<script'; ?>
 src="api_js/animales.js"><?php echo '</script'; ?>
>
<?php }
}
