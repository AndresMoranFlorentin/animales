<?php
/* Smarty version 4.0.0, created on 2022-06-28 20:54:55
  from 'C:\xampp\htdocs\web2\animales\proyectoReinoAnimal\app\template\template_vue\tabla_animal.vue.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_62bb4e7f417de3_56049608',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9bc04660a666c4b81bc554f13231d0e17e5b8988' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\animales\\proyectoReinoAnimal\\app\\template\\template_vue\\tabla_animal.vue.tpl',
      1 => 1656442489,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62bb4e7f417de3_56049608 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"><?php echo '</script'; ?>
>


    
    <section id="template-vue-animales">
        <h3> {{ subtitle }} </h3>
        <table>
            <tr v-for="animal in animales">
                <td>{{animales.nombre}}</td>
                <td>{{animales.descripcion}}</td>
                <td>{{animales.alimentacion}}</td>
            </tr>
        </table>
    </section>
    <?php echo '<script'; ?>
 src="api_js/animales.js"><?php echo '</script'; ?>
>
<?php }
}
