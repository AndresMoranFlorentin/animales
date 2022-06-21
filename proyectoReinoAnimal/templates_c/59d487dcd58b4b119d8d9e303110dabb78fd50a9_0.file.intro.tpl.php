<?php
/* Smarty version 4.1.1, created on 2022-06-21 15:43:50
  from 'C:\xampp\htdocs\web_2\animales\proyectoReinoAnimal\app\template\intro.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_62b1cb16e90d71_94300737',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '59d487dcd58b4b119d8d9e303110dabb78fd50a9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web_2\\animales\\proyectoReinoAnimal\\app\\template\\intro.tpl',
      1 => 1655816667,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62b1cb16e90d71_94300737 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Proyecto Reino Animal</title>

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
<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#"> Reino Animal
        <img src="app/imagenes/lobo.png" alt="logo" width="150px">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="nav justify-content-end">
          <li class="nav-item">
            <a class="nav-link active" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
home">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
loguearse">Login</a>
          </li>
        </ul>

      </div>
    </nav>
  </header>
  <main>
    <h2>clasificaciones: </h2>

    <p>Los animales pueden clasificarse en diferentes grupos. Dependiendo de sus características más comunes,
      si son de sangre fría o caliente,si son terrestres o acuáticos, si ponen huevos,
      o por su tipo de piel, si tienen escamas, branquias, aletas, alas, caparazones, esqueletos externos o internos,
      en esta pagina lo que se mostrara son los animales y ejemplares pero definidos por su especie como
      mamiferos,reptiles, aves, entre otros o incluso en otra clasificacion aun mas extensa vertebrados o invertebrados.
    </p>

<img src="app/imagenes/fauna.jpg" width="300 px" alt="portada">
</div>
<?php }
}
