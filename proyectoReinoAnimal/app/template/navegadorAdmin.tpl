<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
</head>
<body>
<div class="container-fluid">
    <div style="background-color:rgb(223, 45, 230)">
        <ul class="nav nav-mytabs" id="myTab" role="tablist">
            <li class="nav-item" style="background-color:rgb(19, 66, 7)">
                <a class="nav-link active" href="{$BASE_URL}home">Inicio</a>
            </li>
            <li class="nav-item" style="background-color:rgb(180, 27, 27)">
                <a class="nav-link" href="{$BASE_URL}animalesAdmin">Animales</a>
            </li>
            <li class="nav-item" style="background-color:rgb(13, 51, 104)">
                <a class="nav-link" href="{$BASE_URL}especiesAdmin">Especies</a>
            </li>
            <li class="nav-item" style="background-color:rgb(185, 240, 226)">
                <a class="nav-link" href="{$BASE_URL}logout">Desloguearse</a>
            </li>
        </ul>
    </div>
</div>

