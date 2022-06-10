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
</head>

<h1> Seccion Especies</h1>
{if $habilito=='acceso privado'}
    <div style="background-color:rgb(223, 45, 230)">
        <ul class="nav nav-mytabs" id="myTab" role="tablist">
            <li class="nav-item" style="background-color:rgb(19, 66, 7)">
                <a class="nav-link active" href="{$BASE_URL}home">Inicio</a>
            </li>
            <li class="nav-item" style="background-color:rgb(180, 27, 27)">
                <a class="nav-link" href="{$BASE_URL}animalesAdmin">Animales</a>
            </li>
            <li class="nav-item" style="background-color:rgb(6, 40, 150)">
                <a class="nav-link" href="{$BASE_URL}especiesAdmin">Especies</a>
            </li>
            <li class="nav-item" style="background-color:rgb(185, 240, 226)">
                <a class="nav-link" href="{$BASE_URL}logout">Desloguearse</a>
            </li>
        </ul>
    </div>
    <div>

        <label></label>
        <label></label>
        <button><a action="mostrarFormEspecies" href="{$BASE_URL}mostrarFormEspecies">Agregar info a Tabla
                Especies</a></button>
        <label></label>
        <label></label>
    {else}
    {/if}
    <table class="table table-bordered">
        <thead class="thead-dark">
            <th>
                <h2>Nombre</h2>
            </th>
            <th>
                <h2>Vertebrado?</h2>
            </th>
            {if $habilito=='acceso privado'}
                <th>
                    <h2>Borrar</h2>
                </th>
                <th>
                    <h2>Editar</h2>
                </th>
            {/if}
            {foreach $especies  item=espec}
                <tr>
                    {$id = $espec.id_especie}
                    <td>{$espec.especies}</td>
                    {if $espec.vertebrados == "0"}

                        <td>Invertebrado</td>

                    {else}
                        <td>Vertebrado</td>
                    {/if}
                    {if $habilito=='acceso privado'}
                        <td><a action="borrar" href="{$BASE_URL}borrarEspecie/{$id}">Borrar</a></td>
                        <td><a action="editar" href="{$BASE_URL}editarEspecie/{$id}">Editar</a></td>
                    {else}
                    {/if}
                    </td>
                </tr>
            {{/foreach}}
    </table>
</div>