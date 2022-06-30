<?php
/* Smarty version 4.0.0, created on 2022-06-28 03:06:59
  from 'C:\xampp\htdocs\web2\animales\proyectoReinoAnimal\app\template\tabla.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_62ba54330eab72_96037210',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '58fe58339bf166bb7d9373b53f30fab88fa80e1a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\animales\\proyectoReinoAnimal\\app\\template\\tabla.tpl',
      1 => 1656378414,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62ba54330eab72_96037210 (Smarty_Internal_Template $_smarty_tpl) {
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


<section id="animales">
    <table>
        <tr>
            <th>Nombre</th>
            <th>Descripcion</th>
            <th>Alimentacion</th>
            <th>Habitat</th>
        </tr>
        <tbody class="tabla-animal">
        </tbody>
    </table>
    <?php echo '<script'; ?>
 src="api_js/animales.js"><?php echo '</script'; ?>
>
</section>

        </div>


<?php }
}
