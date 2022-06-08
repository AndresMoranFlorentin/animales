<?php
/* Smarty version 4.1.0, created on 2022-06-08 15:42:37
  from 'C:\xampp\htdocs\web2\proyectoReinoAnimal\template\pagAdminEspecie.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62a0a74de88963_47599665',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '214544fee13b28636d2925bb7db21ed673ec1b6f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\proyectoReinoAnimal\\template\\pagAdminEspecie.tpl',
      1 => 1654692718,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62a0a74de88963_47599665 (Smarty_Internal_Template $_smarty_tpl) {
?><head>
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

<h1> Seccion Especies</h1>
<?php if ($_smarty_tpl->tpl_vars['habilito']->value == 'acceso Privado') {?>
    <div style="background-color:rgb(223, 45, 230)">
        <ul class="nav nav-mytabs" id="myTab" role="tablist">
            <li class="nav-item" style="background-color:rgb(19, 66, 7)">
                <a class="nav-link active" href="home">Inicio</a>
            </li>
            <li class="nav-item" style="background-color:rgb(180, 27, 27)">
                <a class="nav-link" href="animalesAdmin">Animales</a>
            </li>
            <li class="nav-item" style="background-color:rgb(6, 40, 150)">
                <a class="nav-link" href="especiesAdmin">Especies</a>
            </li>
            <li class="nav-item" style="background-color:rgb(185, 240, 226)">
                <a class="nav-link" href="logout">Desloguearse</a>
            </li>
        </ul>
    </div>
    <div>

        <label></label>
        <label></label>
        <button><a action="mostrarFormEspecies" href="mostrarFormEspecies">Agregar info a Tabla
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
            <?php if ($_smarty_tpl->tpl_vars['habilito']->value == 'acceso Privado') {?>
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
                    <?php if ($_smarty_tpl->tpl_vars['habilito']->value == 'acceso Privado') {?>
                        <td><a action="borrar" href="borrarEspecie/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">Borrar</a></td>
                        <td><a action="editar" href="editarEspecie/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">Editar</a></td>
                    <?php } else { ?>
                    <?php }?>
                    </td>
                </tr>
            <?php ob_start();
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_prefixVariable2 = ob_get_clean();
echo $_prefixVariable2;?>

    </table>
</div><?php }
}
